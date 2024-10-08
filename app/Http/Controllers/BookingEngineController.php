<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\GuestWalletTransaction;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomReservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BookingEngineController extends Controller
{
    public function getAvailableRoomCategories(Request $request){
        //Get the room categories available for that days and return their total amounts too
        $checkinDate = $request->checkin_date;
        $checkoutDate = $request->checkout_date;
        $rooms = intval($request->rooms);
        $nights = $this->getNights($request->checkin_date,$request->checkout_date);
        $guests = $request->guests;
        $hotel_id = $request->hotel_id;
        try {
            // Get available rooms based on the conditions
            $availableRooms = Room::with('category')
            ->where('hotel_id', $hotel_id)
            ->where(function ($query) use ($checkinDate, $checkoutDate) {
                $query->whereDoesntHave('reservations', function ($subQuery) use ($checkinDate, $checkoutDate) {
                    $subQuery->where('checkout_date', '>', $checkinDate)
                        ->where('checkin_date', '<', $checkoutDate);
                })
                ->orWhereHas('reservations', function ($subQuery) use ($checkinDate, $checkoutDate) {
                    $subQuery->where(function ($innerQuery) use ($checkinDate, $checkoutDate) {
                        $innerQuery->where('checkout_date', '>', $checkinDate)
                            ->where('checkin_date', '<', $checkoutDate)
                            ->whereNotNull('checked_out_at');
                    });
                });
            })
            ->get();

            $categories = $availableRooms->map(function ($room) {
                return [
                    'category_id' => $room->category->id,
                    'category_name' => $room->category->name,
                    'category_rate' => $room->category->rate,
                    'room_id' => $room->id,
                ];
            });
            
            // If you want only unique categories
            $categories = $categories->unique('category_id')->values();

            //dd($categories);
        // Return data to the view or as JSON
        return view('booking-engine-2', compact('categories','rooms','guests','nights','checkinDate','checkoutDate','hotel_id'));
        // Alternatively, for JSON response:
        // return response()->json(['categories' => $categories]);

        } catch (\Exception $e) {
            // Log the exception
            Log::error('Error in checkRoomAvailability method: ' . $e->getMessage());

            // Return an error response
            return response()->json(['error' => 'An error occurred.'], 500);
        }

    }

    public function getNights($checkin_date,$checkout_date){
        // Assuming $checkinDate and $checkoutDate are in 'Y-m-d' format
        $checkinDate = Carbon::parse($checkin_date);
        $checkoutDate = Carbon::parse($checkout_date);

        // Calculate the number of nights
        $nights = $checkinDate->diffInDays($checkoutDate);
        return $nights;
    }

    public function makePayment(Request $request){
        $validatedData = $request->validate([
            'total_amount' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'name' => 'required',
            'room.*' => 'required',
            'rate.*' => 'required|numeric',
            'hotel_id' => 'required',
            'checkin_date' => ['required', 'date'],
            'checkout_date' => ['required', 'date', 'after_or_equal:checkin_date']
        ]);
        //save everything in the session
        // Save the validated data into the session
        session([
            'total_amount' => $validatedData['total_amount'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'name' => $validatedData['name'],
            'rooms' => $validatedData['room'], // Save the array of rooms
            'rates' => $validatedData['rate'], // Save the array of rates
            'hotel_id' => $validatedData['hotel_id'],
            'checkin_date' => $validatedData['checkin_date'],
            'checkout_date' => $validatedData['checkout_date'],
        ]);

        $total = $request->total_amount; // The total amount to be paid
        $charges = floor($total * 0.0155);
        $pre_amount = $charges + $total;

        $amount = $pre_amount * 100;

        $ref_key = 'ref_' . time();

        $callback_url = env('APP_URL') . 'paystackverify_payment/' . $ref_key;
        $postdata =  array('email' => $request->email, 'amount' => $amount, "reference" => $ref_key, "callback_url" => $callback_url);

        $url = "https://api.paystack.co/transaction/initialize";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  //Post Fields
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = [
            'Authorization: Bearer sk_test_6a50fde73bf0b75961cad2b7efee56bd4e5c8809',
            "Cache-Control: no-cache",
            'Content-Type: application/json'
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $request = curl_exec($ch);
        curl_close($ch);
        
        if ($request) {
            $result = json_decode($request, true);
            $redir = $result['data']['authorization_url'];

            return redirect($redir);
        } else {
            return redirect('/home')->with('error', 'Paystack failed to load,please try again');
        }
    }

    public function verify_payment($ref) {

        $result = array();
        $url = 'https://api.paystack.co/transaction/verify/'.$ref;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer sk_test_6a50fde73bf0b75961cad2b7efee56bd4e5c8809']
        );
        $request = curl_exec($ch);
        curl_close($ch);
        //
        if ($request) {
            $result = json_decode($request, true);
             //dd($result);
            if($result){
                if($result['data']){
                    //something came in

                    if($result['data']['status'] === 'success'){
                        
                    //save reservation
                        $success = $this->saveReservation($ref);
                        if($success){
                            return  redirect("/booking-engine")->with('success','Successfully Booked. Check your email for more details');
                        }else{
                            return  redirect("/booking-engine")->with('error','Error with booking reservation. Contact support');
                        }
                        

                    }else{
            return redirect()->back()->with('error', 'Something went wrong, please try again');
            }

                }
                else{
                    return redirect()->back()->with('error', 'Something went wrong, please try again');
                }

            }else{
                return redirect()->back()->with('error', 'Something went wrong, please try again');
            }
        }else{
            return redirect()->back()->with('error', 'Something went wrong, please try again');
        }

    }

    private function saveReservation($ref){
        //check that a reservation has not been made using the same reference
        //return back if it has
        // Check if a reservation with the given reference already exists
        $existingReservation = RoomReservation::where('payment_ref', $ref)->first();

        if ($existingReservation) {
            // If the reservation exists, return an error response or redirect
            return back()->withErrors(['error' => 'A reservation with this reference already exists. Please contact support.']);
        }

        // If no reservation exists, proceed to save the new reservation
        // Assuming you have the necessary data in the request or other sources
        // Begin a database transaction
        DB::beginTransaction();
        try {
            // Retrieve session values and prepare the $reservationData array
            $reservationData = [
                'email' => session('email'),
                'phone' => session('phone'),
                'name' => session('name'),
                'hotel_id' => session('hotel_id'),
                'checkin_date' => session('checkin_date'),
                'checkout_date' => session('checkout_date'),
                'payment_ref' => $ref,
            ];

            //get guest id if it exists or create new guest using email, phone and name
            //then add that id to the reservationData
            // Check if a guest exists or create a new one
            $guest = Guest::where(function($query) {
                $query->where('email', session('email'))
                    ->orWhere('phone', session('phone'));
            })->where('hotel_id', session('hotel_id'))
            ->first();

            if (!$guest) {
            // Create a new guest if not found
            $guest = Guest::create([
                'email' => session('email'),
                'phone' => session('phone'),
                'first_name' => session('name'),
                'hotel_id' => session('hotel_id'),
                'title' => 'Mr',
                // Add other guest attributes as necessary
            ]);
            }

            // Add the guest ID to the reservation data
            $reservationData['guest_id'] = $guest->id;

            foreach (session('rooms') as $key => $room) {
                
                if (session('rooms')[$key] === null) {
                    continue;
                }

                // Save reservation
                $numberOfNights = self::getNights($reservationData['checkin_date'], $reservationData['checkout_date']);

                $rate = session('rates')[$key];

                $reservationData['room_id'] = $room;
                $reservationData['rate'] = $rate;
                $reservationData['total_amount'] = $rate * $numberOfNights;

                $reservationData['user_id'] = Hotel::where('id',session('hotel_id'))->first()->user_id;

                RoomReservation::create($reservationData);

            }

            //add money to guest wallet
            // Add the new amount to the old account balance
            $guest->wallet->balance += session('total_amount');
            $guest->wallet->save();

            GuestWalletTransaction::create([
                'guest_wallet_id' => $guest->wallet->id,
                'amount' => session('total_amount'),
                'transaction_type' => 'credit',
                'description' => 'Deposit - For Reservation',
                'mode_of_payment' => 'Online -Booking Engine',
                'balance' => $guest->wallet->balance,
            ]);

            DB::commit();

            // Return a success response or redirect to another page
            return true;
        } catch (\Exception $e) {
            // Handle exceptions such as database errors
            Log::error('Error saving reservation: ' . $e->getMessage());

            return false;
        }
        
    }

    private function getPaymentInfo($ref)
    {
        $result = array();
        $url = 'https://api.paystack.co/transaction/verify/' . $ref;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            [
                'Authorization: Bearer sk_test_0ac7ee63a8b1e61cd4fdca433841e4c0083ef555'
            ]
        );
        $request = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($request, true);

        return $result['data'];
    }


    public function success(Request $request, $ref)
    {

        $info = $this->getPaymentInfo($ref);

        $first_amont = $info['amount'] / 100;
        $charges =  floor($first_amont * 0.0155);

        $gotten_amont = $first_amont - $charges;



        if ($gotten_amont) {
            $userID = Auth::user('user')->id;

            $allDet = session()->get('checkDet');
            unset($allDet);


            return redirect('/home')->with('success', 'Payment of ' . 'N' . number_format($gotten_amont) . ' was successful');
        } else {
            return redirect('/home')->with('error', 'Payment Failed,please try again');
        }
    }

}

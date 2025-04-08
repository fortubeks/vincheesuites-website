<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class RoomController extends Controller
{
    public function index()
    {
        // call api to get all the room categories from https://venushotelsoftware.com/api/room-categories
        // and return the data to the view
        try {
            $response = Http::get('https://venushotelsoftware.com/api/v1/room-categories', [
                'api_key' => 'FTHLTD',
                'hotel_id' => hotelId(),
            ]);
            if ($response->failed()) {
                throw new \Exception('Failed to fetch room categories');
            }
            $roomCategories = collect($response->json());

            //save the room categories in session
            session(['roomCategories' => $roomCategories['categories']]);

            return view('rooms.index', ['roomCategories' => $roomCategories['categories']]);
        } catch (\Exception $e) {
            logger()->error('Error fetching room categories: ' . $e->getMessage());
            return redirect()->route('home');
        }
    }

    public function show($id)
    {
        // get the room category from the session
        $roomCategories = session('roomCategories');
        if (!$roomCategories) {
            return redirect()->route('rooms.index');
        }
        $roomCategories = collect($roomCategories);
        $roomCategory = $roomCategories->firstWhere('id', $id);
        if (!$roomCategory) {
            return redirect()->route('rooms.index');
        }
        return view('rooms.room-category', [
            'roomCategory' => $roomCategory,
        ]);
    }
}

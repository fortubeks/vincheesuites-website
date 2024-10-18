<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gallery(){
        return view('gallery');
    }

    public function reviews(){
        $reviews = [
            [
                'customer_name' => 'Chi tv',
                'body' => 'The experience was great, experience and well oriented staff. The locate is very secure and room are well suited, throughout my stay in Vinchee, its a home away from home.'
            ],
            [
                'customer_name' => 'Phebean Ilesanmi',
                'body' => 'My partner and I lodged here for a weekend getaway sometimes last year. The place is neat, calm, private. It is suitable for people who want to have private and refreshing getaways. Victoria was responsive and courteous throughout our stay. We\'d visit again someday.'
            ],
            [
                'customer_name' => 'Monica',
                'body' => 'Amazing family run boutique hotel in a safe, quiet gated estate less than 3 km from the airport. Not only is it conveniently located, they currently offer a 6am check-in at 
                no extra cost, which is valuable for those who are coming in on an early flight and want to get some rest asap. I stayed in a king room, and I also toured the 2 and 3 bedroom suites that offer a huge living room and kitchen in each. Best of all, their food is delicious and definitely worthy of the last meal before a trip or first meal back in country.'
            ],
            [
                'customer_name' => 'Chibuike Okoli',
                'body' => 'The apartment is a very neat, quiet environment and well secured. I really enjoyed my stay,most especially the staff and small bar.. I recommend'
            ],
        ];
        return view('reviews')->with(compact('reviews'));
    }

    public function hotelIndex($hotel){
        //get the hotel and navigate to the hotel.idex page with the hotel name
        return view('hotels.index')->with('hotel',$hotel);
    }
}

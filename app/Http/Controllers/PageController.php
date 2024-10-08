<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gallery(){
        return view('gallery');
    }

    public function reviews(){
        return view('reviews');
    }

    public function hotelIndex($hotel){
        //get the hotel and navigate to the hotel.idex page with the hotel name
        return view('hotels.index')->with('hotel',$hotel);
    }
}

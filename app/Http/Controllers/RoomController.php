<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        return view('rooms.index');
    }

    public function show(){
        return view('rooms.room-single');
    }

    public function showOneBed(){
        return view('rooms.1-br-apartment');
    }

    public function showTwoBed(){
        return view('rooms.2-br-apartment');
    }
}

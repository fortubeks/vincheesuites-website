<?php

use Sqids\Sqids;

function hotelId()
{
    $hotel_id = env('HOTEL_ID');
    $sqids = new Sqids();
    $id = $sqids->encode([$hotel_id]); // "86Rf07"
    return $id;
    //return $sqids->decode($id); // [1, 2, 3]
}
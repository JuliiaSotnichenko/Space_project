<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Booking;


use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getType($id)
    {
        $bookings = Booking::where('user_id', $id)->get();
        return $bookings->toJson(JSON_PRETTY_PRINT);
    }
}

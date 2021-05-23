<?php

namespace App\Http\Controllers;
use Newsletter;

use App\Models\Flight;
use App\Models\Booking;



use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter as NewsletterNewsletter;

class ApiController extends Controller
{
    public function getType($id)
    {
        $bookings = Booking::where('user_id', $id)->get();
        return $bookings->toJson(JSON_PRETTY_PRINT);
    }


    // for mailing 
    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->user_email) ) {
             Newsletter::subscribe($request->user_email);
        }

    }
}
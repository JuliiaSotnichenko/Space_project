<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingValidation;
use App\Models\Booking;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $allBookings = Booking::all();
        return view('BackOffice.booking.booking-details', ['allBookings' => $allBookings]);
    }



    // For payment

    public function payment($id)
    {
        $user = Auth::user();
        if ($user != null) {
            $packag = Flight::find($id);
            return view('/FrontOffice/booking/payment', ['packag' => $packag]);
        } else {
            return redirect('/login')->with('success', 'You have to be Loggedl.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingValidation $request)
    {
        $request->validated();
        $book = new Booking();


        $book->user_id = $request->user;
        $book->flight_id = $request->pakage;
        $book->payment = $request->payment;
        $book->save();
        return redirect('/dashboard')->with('success', 'Your payment was successful.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

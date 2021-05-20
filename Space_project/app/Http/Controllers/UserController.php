<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Flight;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $loggedUser = Auth::user();
        if ($loggedUser->role == 'admin') { // check if the user logging in is a "user" or an "admin"
            $users = User::all();
            return view('BackOffice.user.user-list',  ['users' => $users]); // if admin show the back office portal page
        } elseif ($loggedUser->role == 'user') {
            return view('../dashboard');
        } else {
            return redirect('/');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // A user is created from the register protocole
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showUser($id)
    {

        $user = User::find($id);

        return view('BackOffice.user.user-details', ['user' => $user]);

        $loggedUser = Auth::user();

        $bookings = Booking::where('user_id', $loggedUser->id)->get();

        if (!$bookings) {
            return "No bookings found";
        } else {
            return view('dashboard', ['user' => $loggedUser], ['bookings' => $bookings]);
        }
        //return view('bop.user-detail', ['user' => $user]);
        // if (isset($_GET['search'])) {
        //     $user = auth()->user();
        // }
    }
    public function showAcc()
    {



        $loggedUser = Auth::user();

        $bookings = Booking::where('user_id', '=', $loggedUser->id)->get();

        $flight = Flight::find($bookings[0]->flight_id)->get();

        //return ($flight);

        if (!$bookings) {
            return "No bookings found";
        } else {
            return view('dashboard', ['user' => $loggedUser, 'booking' => $bookings[0], 'flight' => $flight[0]]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('BackOffice.user.user-update', ['user' => $user]);
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
        //$request->validated();
        $user = auth()->user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->training_status = $request->training_status;
        $user->country = $request->country;
        // $user->city = $request->city;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save(); {
            $booking = User::find($id);
            $booking = User::where('id', $id)->first();
            $booking->package_id = $request->package_id;
            $booking->user_id = $request->user_id;
            $booking->payment_status = $request->payment_status;
        }
        // check if the user logging in is a "user" or an "admin"
        return view('BackOffice.backOfficePortal', ['user' => $user])->with('success', $request->last_name . ' was updated successfully.');
        // if admin show the back office portal page


    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = User::destroy($id);

        if ($result)
            return 'Deleted successfully';
    }
}

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



        $loggedUser = auth()->user();

        $booking = Booking::where('user_id', '=', $loggedUser->id)->get();
        //return ($loggedUser);
        if (sizeof($booking) == 0) {

            $booking = null;

            return view('dashboard', ['user' => $loggedUser, 'booking' => $booking]);

            //return ($flight);
        } else {

            $flight = Flight::find($booking[0]->flight_id);

            //return ($flight);


            return view('dashboard', ['user' => $loggedUser, 'booking' => $booking[0], 'flight' => $flight]);
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
    public function editAcc()
    {
        $user = auth()->user();
        return view('update-user', ['user' => $user]);
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
        $user = User::find($id);
        $user->id = $request->id;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->training_status = $request->training_status;
        $user->country = $request->country;
        $user->role = $user->role;
        $user->email = $request->email;
        $user->password = $user->password;
        $user->save(); {
            $booking = User::find($user->id);
            $booking = User::where('id', $user->id)->first();
            $booking->package_id = $request->package_id;
            $booking->user_id = $request->user_id;
            $booking->payment_status = $request->payment_status;
        }
        $users = User::all();

        // check if the user logging in is a "user" or an "admin"
        return view('BackOffice.user.user-list', ['users' => $users])->with('success', $request->last_name . ' was updated successfully.');
        // if admin show the back office portal page

    }
    public function updateAcc(Request $request)
    {
        //$request->validated();
        $user = auth()->user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->training_status = $user->training_status;
        $user->country = $request->country;
        $user->role = $user->role;
        $user->email = $request->email;
        $user->password = $user->password;
        $user->save();

        if ($user->role == 'user') {
            return view('home');
        } else { // check if the user logging in is a "user" or an "admin"
            return view('BackOffice.user.user-update', ['user' => $user])->with('success' . $request->last_name . ' was updated successfully.');
            // if admin show the back office portal page
        }
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        $user = auth()->user();
        $users = User::all();

        if ($user->role == 'admin') {

        return view('BackOffice.user.user-update', ['users' => $users])->with('success' . 'Booking deleted successfully.');
    }
}
}
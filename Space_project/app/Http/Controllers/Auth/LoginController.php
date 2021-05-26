<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    // public function index(Request $request)
    // {
    //     $loggedUser = Auth::user();
    //     if ($loggedUser->role == 'admin') { // check if the user logging in is a "user" or an "admin"
    //         $users = User::all();
    //         return view('BackOffice.user.user-list',  ['users' => $users]); // if admin show the back office portal page
    //     } elseif ($loggedUser->role == 'user') {
    //         return view('../dashboard');
    //     } else {
    //         return redirect('/');
    //     }
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

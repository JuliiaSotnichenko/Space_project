<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FligthController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';

// FRONT OFFICE
//ACCOUNT PAGE
// Account: Dashboard
Route::get('/dashboard', [UserController::class, 'showAcc'])->middleware(['auth']);
// Account: Editing account info
Route::get('/update/user', [UserController::class, 'editAcc'])->middleware(['auth']);
// Account: Updating account info
Route::put('/update/user', [UserController::class, 'updateAcc']);
// Account: Logout
Route::get('/logout', [LoginController::class, 'logout']);

// ABOUT US PAGE
Route::get('/about', function () {
    return view('about');
});


// BACK OFFICE
// FLIGHT PAGE
// Flight: Show all flights.
Route::get('/flight/AllFlight', [FlightController::class, 'index']);
// Flight: Show the html for to create an entry.
Route::get('/flight/InsertFlight', [FlightController::class, 'create']);
// Flight: Method to insert into the DB.
Route::post('/flight/InsertFlight', [FlightController::class, 'store']);
// Flight: Show the edit form.
Route::get('/flight/editFlight/{id}', [FlightController::class, 'edit']);
// Flight: Update the DB from the edit form.
Route::post('/flight/editFlight/{id}', [FlightController::class, 'update']);
// Flight: Delete flight.
Route::delete('/flight/deleteFligth/{id}', [FlightController::class, 'destroy']);

// BOOKING PAGE
// Bookings: Show all flights.
Route::get('/booking/form', [FlightController::class, 'indexfront']);
// Bookings: Display booking details.
Route::get('/booking/detail/{id}', [FlightController::class, 'show']);
// Bookings: Payment methods.
Route::get('/booking/payment/{id}', [BookingController::class, 'payment']);
Route::post('/booking/paymentStore/{id}', [BookingController::class, 'store']);


// USERS PAGE
// Users: display all users.
Route::get('/admin', [UserController::class, 'index']);
// Users: display specific user.
Route::get('/admin/list', [UserController::class, 'showUser']);
// Users: display user's details.
Route::get('/admin/user/{id}', [UserController::class, 'showUser']);
// Users: Display the edit form.
Route::get('/admin/edit/user/{id}', [UserController::class, 'edit']);
// Users: update user's data in DB.
Route::put('/admin/update/user/{id}', [UserController::class, 'update']);



// live search
Route::get('/livesearch', [SearchController::class, 'index']);
Route::get('/search', [SearchController::class, 'search']);

// mailing
Route::get('/', [ApiController::class, 'create']);
Route::post('/', [ApiController::class, 'store']);


// Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');

// Route::get('create',['as'=>'subscribe','uses'=>'ApiController@subscribe']);

// Route::post('store',['as'=>'subscribe','uses'=>'ApiController@subscribe']);

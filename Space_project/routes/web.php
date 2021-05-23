<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FligthController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';


// Front Office
//LANDING Page:
Route::get('/', function () {
    return view('home');
});

// ACCOUNT Dashboard:
Route::get('/dashboard', [UserController::class, 'showAcc'])->middleware(['auth']);
// ACCOUNT Editing account info:
Route::get('/update/user', [UserController::class, 'editAcc'])->middleware(['auth']);
// ACCOUNT Updating account info:
Route::put('/update/user', [UserController::class, 'updateAcc']);
// Logout
Route::get('/logout', [LoginController::class, 'logout']);



//Back Office
//FLIGHT Page:
//FLIGHT Show all flights:
Route::get('/fligth/Allfligth', [FligthController::class, 'index']);
//FLIGHT Show the 'html' form to insert data:
Route::get('/fligth/InsertFligth', [FligthController::class, 'create']);
//FLIGHT Method to insert in the data base:
Route::post('/fligth/InsertFligth', [FligthController::class, 'store']);
//FLIGHT Displaythe edit form:
Route::get('/fligth/editFligth/{id}', [FligthController::class, 'edit']);
//FLIGHT Update to the data base:
Route::post('/fligth/editFligth/{id}', [FligthController::class, 'update']);
//FLIGHT Delete Flight:
Route::delete('/fligth/deleteFligth/{id}', [FligthController::class, 'destroy']);

//BOOKINGS Page:
Route::get('/bookform', [FligthController::class, 'indexfront']);
//BOOKINGS Display the detail page:
Route::get('/bookingDitail/{id}', [FligthController::class, 'show']);
//BOOKINGS Display the payment page:
Route::get('/bookpay/{id}', [BookingController::class, 'payment']);
//BOOKINGS Update the DB if the payment is done, confirming the booking:
Route::post('/bookpay/{id}', [BookingController::class, 'store']);




// Back office access

// BoP page
Route::get('/admin', [UserController::class, 'index']);
// BoP display user
Route::get('/admin/list', [UserController::class, 'showUser']);
// BoP display user details
Route::get('/admin/user/{id}', [UserController::class, 'showUser']);
// BoP update user
Route::get('/admin/edit/user/{id}', [UserController::class, 'edit']);
Route::put('/admin/update/user/{id}', [UserController::class, 'update']);






// about Us page Juliia
Route::get('/about', function () {
    return view('about');
});

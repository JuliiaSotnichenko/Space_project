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



// Account info
Route::get('/dashboard', [UserController::class, 'showAcc'])->middleware(['auth']);
// Editing and updating account info
Route::get('/update/user', [UserController::class, 'editAcc'])->middleware(['auth']);
Route::put('/update/user', [UserController::class, 'updateAcc']);
// Logout
Route::get('/logout', [LoginController::class, 'logout']);

//Auth::routes();

//Route::get('/', [HomeController::class, 'index']);
/***********************Fligth Routes*********************** */




/**Insert in the data base */
//show all fily for backend
Route::get('/fligth/Allfligth', [FligthController::class, 'index']);
//show the form html to insert data
Route::get('/fligth/InsertFligth', [FligthController::class, 'create']);
//method to insert in the data base
Route::post('/fligth/InsertFligth', [FligthController::class, 'store']);
/**edit method */
//show the edit form
Route::get('/fligth/editFligth/{id}', [FligthController::class, 'edit']);
//update the data base
Route::post('/fligth/editFligth/{id}', [FligthController::class, 'update']);
/**delite fligth */
Route::delete('/fligth/deleteFligth/{id}', [FligthController::class, 'destroy']);

/**************Book Route************* */
Route::get('/bookform', [FligthController::class, 'indexfront']);
//route for  dettail page
Route::get('/bookingDitail/{id}', [FligthController::class, 'show']);

Route::get('/bookpay/{id}', [BookingController::class, 'payment']);
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






// about Us page 
Route::get('/about', function () {
    return view('about');
});

// live search
Route::get('/livesearch',[SearchController::class, 'index']);
Route::get('/search',[SearchController::class, 'search']);

// mailing
Route::get('/', [ApiController::class, 'create']);
Route::post('/', [ApiController::class, 'store']);


// Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');

// Route::get('create',['as'=>'subscribe','uses'=>'ApiController@subscribe']);

// Route::post('store',['as'=>'subscribe','uses'=>'ApiController@subscribe']);

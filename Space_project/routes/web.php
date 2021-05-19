<?php

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

Route::get('/home', [UserController::class, 'index']);
Route::get('/admin', [UserController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';



// Account info
Route::get('/dashboard', [UserController::class, 'show'])->middleware(['auth']);
// Editing and updating account info
Route::get('/update/user', [UserController::class, 'edit'])->middleware(['auth']);
Route::put('/update/user', [UserController::class, 'update']);
Route::get('/logout', [LoginController::class, 'logout']);

//Auth::routes();

Route::get('/', [HomeController::class, 'index']);
/***********************Fligth Routes*********************** */
//show all filgths in the data base
//Route::get('/fligth/Insertform', [FligthController::class, 'index']);


/**Insert in the data base */
//show the form html to insert data
Route::get('/fligth/Insertform', [FligthController::class, 'create']);
//method to insert in the data base
Route::post('/fligth/InsertFligth', [FligthController::class, 'store']);


/**edit method */
//show the edit form
Route::get('/fligth/editFligth', [FligthController::class, 'edit']);
//update the data base
//Route::post('/fligth/editFligth', [FligthController::class, 'update']);

/**delite fligth */
Route::get('/fligth/editFligth', [FligthController::class, 'destroy']);



// Back office access

// BoP page
Route::post('/admin/portal', [UserController::class, 'index']);
// BoP search bar
Route::post('/admin/portal/{email}', [UserController::class, 'show']);
// BoP update results
Route::post('/admin/portal/update/{id}', [UserController::class, 'update']);
// BoP delete entry
Route::post('/admin/portal/{id}', [UserController::class, 'delete']);


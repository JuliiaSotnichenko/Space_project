<?php

use App\Http\Controllers\FligthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Home page

Route::get('/', [HomeController::class, 'index']);
/***********************Fligth Routes*********************** */
//show all filgths in the data base
Route::get('/fligth/Insertform', [FligthController::class, 'index']);

/**Insert in the data base */
//show the form html to insert data
Route::get('/fligth/InsertFligth', [FligthController::class, 'create']);
//method to insert in the data base
Route::post('/fligth/InsertFligth', [FligthController::class, 'store']);


/**edit method */
//show the edit form
Route::get('/fligth/editFligth', [FligthController::class, 'edit']);
//update the data base
Route::post('/fligth/editFligth', [FligthController::class, 'update']);

/**delite fligth */
Route::get('/fligth/deleteFligth', [FligthController::class, 'destroy']);

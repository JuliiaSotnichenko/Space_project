<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
/*Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/



// Route::get('/', function () {
//     return view('welcome');
// });

// Home page

Route::get('/', [HomeController::class, 'index']);

// Back office access
    // BoP page
Route::post('/admin/portal', [UserController::'index']);
    // BoP search bar
Route::post('/admin/portal/{email}', [UserController::'show']);
    // BoP update results
Route::post('/admin/portal/update/{id}', [UserController::'update']);
    // BoP delete entry
Route::post('/admin/portal/{id}', [UserController::'delete']);


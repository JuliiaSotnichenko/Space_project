<?php

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';


Auth::routes();




// Back office access
    // BoP page
// Route::post('/admin/portal', [UserController::'index']);
//     // BoP search bar
// Route::post('/admin/portal', [UserController::'show']);
//     // BoP edit results
// Route::post('/admin/portal', [UserController::'edit']);
//     // BoP delete entry
// Route::post('/admin/portal', [UserController::'delete']);



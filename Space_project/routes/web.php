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

// Account info

Route::get('/dashboard', [UserController::class, 'show'])->middleware(['auth']);

// Editing and updating account info

Route::get('/update/user', [UserController::class, 'edit'])->middleware(['auth']);
Route::put('/update/user', [UserController::class, 'update']);


//Auth::routes();




// Back office access
    // BoP page
/*Route::post('/admin/portal', [UserController::'index']);
    // BoP search bar
Route::post('/admin/portal/{email}', [UserController::'show']);
    // BoP update results
Route::post('/admin/portal/update/{id}', [UserController::'update']);
    // BoP delete entry
Route::post('/admin/portal/{id}', [UserController::'delete']);*/

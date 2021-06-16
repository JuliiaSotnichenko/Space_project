<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('flights', ProductController::class);
Route::get('/flights/search/{itinerary}', [ProductController::class, 'search']);

// Route::get('/flights', [ProductController::class, 'index']);

// Route::post('/flights', [ProductController::class, 'store']);

// Route::get('/flights/id', [ProductController::class, 'show']);

//     return Product::create([
//         "depart_date" => "12/04/2023",
//         "depart_time" => "12:00",
//         "arrival_date" => "02/05/2023",
//         "arrival_time" => "16:00",
//         "status" => "Not Done",
//         "itinerary" => "Orbital Hotel",
//         "location" => "Baikonur Cosmodrome",
//         "fly_ref" => "A0000001",
//         "price" => '799000', 
//         "file" => "",
//         "description" => "Stay in our orbital hotel for 3 weeks of luxurious relaxation in microgravity",

//     ]);
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

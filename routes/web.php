<?php

use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', function () {
//     return view('homepage.index');
// });

Route::get('/', [HomeController::class, 'Index']);

Route::get('/tour-page', [TourController::class, 'Index']);
Route::get('/all-tours', [TourController::class, 'AllTours']);
Route::get('/tour-detail', [TourController::class, 'TourDetail']);
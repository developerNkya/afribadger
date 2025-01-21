<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'contactPage']);
Route::get('/view-tour', [TourController::class, 'viewTour']);
Route::get('/about-us', [AboutController::class, 'aboutPage']);
Route::post('/posted-request', [ContactController::class, 'postedRequest']);
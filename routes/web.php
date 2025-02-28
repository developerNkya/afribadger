<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TestMailController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/mail', [TestMailController::class, 'mail']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'home']);
Route::get('/contact-us', [ContactController::class, 'contactPage']);
Route::get('view-tour/{slug}', [TourController::class, 'viewTour'])->name('view-tour');
Route::post('book-tour', [TourController::class, 'bookTour'])->name('book-tour');

Route::get('/about-us', [AboutController::class, 'aboutPage']);
Route::get('/tours', [TourController::class, 'toursPage']);
Route::post('/posted-request', [ContactController::class, 'postedRequest']);


Route::get('/maintenance', [HomeController::class, 'maintenance'])->name('fix');
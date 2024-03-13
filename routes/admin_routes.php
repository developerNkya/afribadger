<?php

use App\Http\Controllers\AdminController;
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





Route::get('/sign-in', [AdminController::class, 'SignIn'])->name('sign-in');
Route::post('/login', [AdminController::class, 'Login']);

// Route::get('/admin-home', [AdminController::class, 'AdminHomePage'])->name('admin-home');


//these routes can only be accessed when user is logged in as admin::
Route::middleware(['isAdmin'])->group(function () {
    Route::get('/admin-home', [AdminController::class, 'AdminHomePage'])->name('admin-home');
    Route::get('/admin-add-tour', [AdminController::class, 'AdminTourPage'])->name('admin-add-tour');
    Route::get('/edit-intro-text', [AdminController::class, 'EditIntroText'])->name('edit-intro-text');

    Route::get('/new-tour', [AdminController::class, 'newTour'])->name('new-tour');
    Route::get('/view_all_tours', [AdminController::class, 'viewTours'])->name('view-all_tours');

    Route::get('/admin-tour-detail/{id}', [AdminController::class, 'singleTour'])->name('single-tour');

    Route::post('/save_tour', [AdminController::class, 'saveTour'])->name('save_tour');

    Route::post('/update-intro-text', [AdminController::class, 'UpdateIntroText'])->name('Update-intro-text');

    Route::get('/admin-view-ratings', [AdminController::class, 'AdminRatingsPage'])->name('admin-view-ratings');
    Route::get('/update_rating/{id}', [AdminController::class, 'UpdateRating'])->name('admin-update-rating');
    Route::get('/ratings_category/{category}',  [AdminController::class, 'RatingCategory'])->name('admin-rating-category');

    Route::get('/fetchSimilarReviews/{input}',  [AdminController::class, 'fetchSimilarReviews'])->name('admin-similar-reviews');

    Route::get('/fetchSimilarBookings/{input}',  [AdminController::class, 'fetchSimilarBookings'])->name('admin-similar-bookings');


    Route::get('/admin-view-bookings', [AdminController::class, 'AdminBookingsPage'])->name('admin-view-bookings');

    Route::get('/admin-view-feedback', [AdminController::class, 'AdminFeedbackPage'])->name('admin-view-feedback');


    Route::get('/deleteFeedback/{id}', [AdminController::class, 'deleteFeedback'])->name('admin-delete-Feedback');

  
    Route::get('/admin_profile', [AdminController::class, 'AdminProfile'])->name('admin-view-profile');
    
    Route::post('/update/user_info', [AdminController::class, 'UpdateProfile'])->name('admin-update-profile');


});



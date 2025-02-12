<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Booking;


class TourController extends Controller
{


   public function viewTour($slug)
{
    $tour = Tour::where('slug', $slug)->firstOrFail();

    // return $tour;
    return view('view_tour.view_tour', compact('tour'));
}

public function bookTour(Request $request)
{
    // Validate the incoming request
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'request' => 'nullable|string',
        'preference' => 'required|in:email,whatsapp,calls',
        'tour_id' => 'required|exists:tours,id',
    ]);

    try {
        // If validation passes, store the booking in the database
        $booking =Booking::create([
            'tour_id' => $validated['tour_id'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'request' => $validated['request'],
            'preference' => $validated['preference'],
        ]);

        // Return a success response with a success message for toast
        return response()->json([
            'status' => 'success',
            'message' => 'Booking successful!',
        ]);

    } catch (\Exception $e) {
        // Return an error response if something went wrong
        return response()->json([
            'status' => 'error',
            'message' => 'Something went wrong, please try again later.',
        ]);
    }
}



}

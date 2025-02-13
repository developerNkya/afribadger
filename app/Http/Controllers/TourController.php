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
    // Custom error messages
    $messages = [
        'name.required' => 'Please enter your name.',
        'name.string' => 'Your name must be a valid text.',
        'name.max' => 'Your name cannot exceed 255 characters.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'email.max' => 'Your email address cannot exceed 255 characters.',
        'phone.required' => 'Please enter your phone number.',
        'phone.string' => 'Your phone number must be a valid text.',
        'phone.max' => 'Your phone number cannot exceed 255 characters.',
        'preference.required' => 'Please select a contact preference.',
        'preference.in' => 'Please select a valid contact preference (email, WhatsApp, or calls).',
        'tour_id.required' => 'Tour ID is required.',
        'tour_id.exists' => 'The selected tour does not exist.',
    ];

    // Validate the incoming request with custom messages
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'request' => 'nullable|string',
        'preference' => 'required|in:email,whatsapp,calls',
        'tour_id' => 'required|exists:tours,id',
    ], $messages);

    try {
        // If validation passes, store the booking in the database
        $booking = Booking::create([
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class TourController extends Controller
{

    public function toursPage(){
        $national_parks = Tour::where('tour_type_id', 1)->paginate(6);
            return view('home.home', ['national_parks' => $national_parks]);
    }

        

    public function viewTour($slug)
    {
        $tour = Tour::where('slug', $slug)->firstOrFail();
        return view('view_tour.view_tour', compact('tour'));
    }

public function bookTour(Request $request)
{
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

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => [
            'required',
            'string',
            'max:255',
            'regex:/^\+\d{1,4}\d{6,}$/', // Ensures phone starts with a country code
        ],
        'request' => 'nullable|string',
        'preference' => 'required|in:email,whatsapp,calls',
        'tour_id' => 'required|exists:tours,id',
    ], $messages);

    try {
        // Fetch the tour name
        $tour = Tour::find($validated['tour_id']);
        // Create booking
        $booking = Booking::create([
            'tour_id' => $validated['tour_id'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'request' => $validated['request'],
            'preference' => $validated['preference'],
        ]);

        // Add tour name to booking object
        $booking->tour_name = $tour->title; // Add tour name dynamically

        // Send email with booking data
        Mail::to("info@camelleonsafaris.com")->send(new TestMail($booking));

        // Store success message in session
        session()->flash('status', 'success');
        session()->flash('message', 'Booking successful!');

    } catch (\Exception $e) {
        // Log the error to the console
        \Log::error('Booking error: ' . $e->getMessage());

        // Store error message in session
        session()->flash('status', 'error');
        session()->flash('message', 'Something went wrong, please try again later.');
    }

    // Redirect back to the form page
    return redirect()->back();
}



}

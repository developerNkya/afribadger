<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{

    public function toursPage(){
        $national_parks = Tour::where('tour_type_id', 1)->paginate(6);
            return view('home.home', ['national_parks' => $national_parks]);
    }

        

    public function viewTour($slug)
    {
        $tour = Tour::where('slug', $slug)->firstOrFail();
    
        $other_tours = Tour::where('tour_type_id', $tour->tour_type_id)
                           ->where('slug', '!=', $slug)
                           ->inRandomOrder() 
                           ->take(3)
                           ->get();
    
        return view('view_tour.view_tour', compact('tour', 'other_tours'));
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
            DB::beginTransaction();
    
            // ✅ Check if booking already exists
            $existingBooking = Booking::where([
                'tour_id' => $validated['tour_id'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
            ])->first();
    
            if ($existingBooking) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'You have already booked this tour.'
                ], 400);
            }
    
            // ✅ Fetch the tour
            $tour = Tour::findOrFail($validated['tour_id']);
    
            // ✅ Create booking
            $booking = Booking::create([
                'tour_id' => $validated['tour_id'],
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'request' => $validated['request'],
                'preference' => $validated['preference'],
            ]);
    
            // ✅ Add tour name dynamically
            $booking->tour_name = $tour->title;
    
            // ✅ Send email
            Mail::to("info@camelleonsafaris.com")->send(new TestMail($booking));
    
            DB::commit();
    
            // ✅ Return JSON success response
            return response()->json([
                'status' => 'success',
                'message' => 'Booking successful!'
            ], 200);
    
        } catch (\Exception $e) {
            DB::rollBack();
    
            \Log::error('Booking error: ' . $e->getMessage());
    
            // ✅ Return JSON error response
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong, please try again later.',
                'error' => $e->getMessage(), // Include error for debugging (remove in production)
            ], 500);
        }
    }
    
    
    public function getDestinations(Request $request)
    {
        $query = $request->input('query', '');
    
        // If the query is empty, return an empty array
        if (empty($query)) {
            return response()->json([]);
        }
    
        // Convert query to lowercase for case-insensitive matching
        $lowercaseQuery = strtolower($query);
    
        // Fetch destinations that partially match the query (case-insensitive)
        $destinations = Tour::whereRaw('JSON_SEARCH(LOWER(destinations), "one", ?) IS NOT NULL', ["%$lowercaseQuery%"])
            ->pluck('destinations')
            ->flatMap(function ($json) {
                return json_decode($json, true);
            })
            ->filter(function ($destination) use ($lowercaseQuery) {
                return stripos($destination, $lowercaseQuery) !== false;
            })
            ->unique()
            ->values();
    
        return response()->json($destinations);
    }


    public function searchTrips(Request $request)
    {
        $request->validate([
            'destination' => 'required|string',
            'duration' => 'nullable|string',
            'budget' => 'nullable|numeric',
        ]);
    
        $destination = $request->input('destination');
        $duration = $request->input('duration');
        $budget = $request->input('budget');
    
        // Perform search logic (e.g., query the database)
        $trips = Tour::whereRaw("JSON_CONTAINS(destinations, ?)", [json_encode($destination)])
        ->when($duration, function ($query, $duration) {
            return $query->where('days', '<=', $duration);
        })
        ->when($budget, function ($query, $budget) {
            return $query->where('amount', '<=', $budget);
        })
        ->paginate(6);
    
        return response()->json($trips);


    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function bookingPage(Request $request, $id)
    {
        //get the price
        $price = Tour::where('id',$id)->value('price');

        return view('bookingUser.infoSection', ['tour_id' => $id,'price'=>$price]);

    }



    public function saveBooking(Request $request)
    {

        // Validate the request
        $validatedData = $request->validate([
            'firstname_booking' => 'required|string|max:255',
            'lastname_booking' => 'required|string|max:255',
            'email_booking' => 'required|string|email|max:255',
            'expected_trip_date' => 'required|date',
            'num_travelers' => 'required|string|in:single,multiple',
            'number_of_travelers' => 'required_if:num_travelers,multiple|integer|min:1',
            'telephone_booking' => 'nullable|string|max:20',
        ]);


        // Check if a similar booking already exists
        $existingBooking = Booking::where('email', $validatedData['email_booking'])
            ->where('trip_date', $validatedData['expected_trip_date'])
            ->first();

        if ($existingBooking) {
            // Similar booking exists
            return redirect()->back()->with('error', 'A similar booking already exists.');
        }

        // Create a new Booking instance
        $booking = new Booking();

        // Set the properties of the booking instance
        $booking->firstname = $validatedData['firstname_booking'];
        $booking->lastname = $validatedData['lastname_booking'];
        $booking->email = $validatedData['email_booking'];
        $booking->trip_date = $validatedData['expected_trip_date'];
        $booking->no_of_travellers = is_array($validatedData['number_of_travelers']) ? $validatedData['number_of_travelers'] : 1;
        $booking->phone_no = $validatedData['telephone_booking'];
        $booking->tour_id = $request->tour_id;

        if ($booking->save()) {
            // Booking successfully saved
            // return redirect()->back()->with('success', 'Booking saved successfully!');
            return view('bookingUser.completeBooking');
        } else {
            // Booking failed to save
            return redirect()->back()->with('error', 'Failed to save booking. Please try again.');
        
        }
    }

}

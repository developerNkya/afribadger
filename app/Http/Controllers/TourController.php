<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Rating;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TourController extends Controller
{


    public function Index()
    {
        return view('tourpage.index');
    }

    public function AllTours()
    {
        //fetch all tours::
        $tours = Tour::get();

        //decoding the imagepaths::
        foreach ($tours as $tour) {
            $tour->image_paths = json_decode($tour->image_paths, true);
        }

        //    return response()->json([
        //     'success' => false,
        //     'message' => $tours
        // ]);

        return view('alltours.index', ['tours' => $tours]);
    }



    public function UserRating(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name_review' => 'required|string|max:255',
            'email_review' => 'required|email|max:255',
            'rating_review' => 'required|integer|min:1|max:10',
            'review_text' => 'required|string',
            'tour_id' => 'required',
            // You may add additional validation rules as needed
        ]);

        //check if user has already rated::
        // Check if the email already exists for the given tour_id
        $existingRating = Rating::where('email', $validatedData['email_review'])
            ->where('tour_id', $validatedData['tour_id'])
            ->first();

        if ($existingRating) {
            return Redirect::back()->withErrors(['msg' => 'Sorry!...user with same email has already rated']);
        }
        // // Create a new Rating instance and fill it with the validated data
        $rating = new Rating();
        $rating->name = $validatedData['name_review'];
        $rating->email = $validatedData['email_review'];
        $rating->rating = $validatedData['rating_review'];
        $rating->review = $validatedData['review_text'];
        $rating->tour_id =  $validatedData['tour_id'];
        $rating->status =  'pending';
        // Save the new rating
        $rating->save();
        return redirect()->back()->with('message', 'Thank you for your ratings!');

    }

    public function TourDetail(Request $request, $id)
    {
        $tours = Tour::where('id', $id)->get();

        $ratings = Rating::where('tour_id', $id)
            ->where('status', 'approved')
            ->get();



        // Decoding the image paths
        foreach ($tours as $tour) {
            $tour->image_paths = json_decode($tour->image_paths, true);
        }


        return view('tourdetails.index', ['tours' => $tours,'ratings'=> $ratings]);
    }




}

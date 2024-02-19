<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    Public function Index(){
        return view('tourpage.index');
    }

    Public function AllTours(){
        //fetch all tours::
        $tours = Tour::get();
       
        //decoding the imagepaths::
        foreach ($tours as $tour) {
            $tour->image_paths = json_decode($tour->image_paths, true);
        }



        return view('alltours.index', ['tours' => $tours]);
    }

 
    public function TourDetail(Request $request, $id)
    {
        $tours = Tour::where('id', $id)->get();
    
        // Decoding the image paths
        foreach ($tours as $tour) {
            $tour->image_paths = json_decode($tour->image_paths, true);
        }
    
        // Storing data in session
        $request->session()->put('tours', $tours);
    
        // Redirecting to another route
        return redirect('tour-detail1');
    }
    
    public function TourDetail1(Request $request)
    {
        // Retrieving data from session
        $tours = $request->session()->get('tours');
    
        return view('tourdetails.index', ['tours' => $tours]);
    }
    


}

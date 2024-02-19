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

 
    Public function  TourDetail(){
        

        return view('tourdetails.index');
    }



}

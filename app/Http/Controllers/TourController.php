<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{


   public function viewTour($slug)
{
    $tour = Tour::where('slug', $slug)->firstOrFail();
    return view('view_tour.view_tour', compact('tour'));
}


}

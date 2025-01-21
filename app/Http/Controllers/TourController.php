<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
public function viewTour()
    {
        return view('view_tour.view_tour');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutPage()
    {
        // Paginate the results, 6 items per page (adjust as needed)
       // $national_parks = Tour::where('tour_type_id', 1)->paginate(6);
        return view('about.about');
    }


    
}

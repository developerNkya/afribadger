<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Paginate the results, 6 items per page (adjust as needed)
        $national_parks = Tour::where('tour_type_id', 1)->paginate(6);
        return view('home.home', ['national_parks' => $national_parks]);
    }
    

}

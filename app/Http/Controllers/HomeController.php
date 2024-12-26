<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $national_parks = Tour::where('tour_type_id', 1)->get();
    return view('home.home', ['national_parks' => $national_parks]);

}

}

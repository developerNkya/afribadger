<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    Public function Index(){
        return view('tourpage.index');
    }

    Public function AllTours(){
        return view('alltours.index');
    }

 
    Public function  TourDetail(){
        return view('tourdetails.index');
    }


}

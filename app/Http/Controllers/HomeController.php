<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    Public function Index(){
        return view('homepage.index');
    }
}

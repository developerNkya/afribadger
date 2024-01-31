<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
 
    Public function Index(){

        //clear the active user::
         Session::put('active_user', '');

        //return home view::
        return view('homepage.index');
    }
}

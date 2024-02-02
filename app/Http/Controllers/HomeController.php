<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
 
    Public function Index(){

        //clear the active user::
         Session::put('active_user', '');

                //Fetch the values from db:
    $header = Detail::where('name','Home-Header')->first();
    $subtitle = Detail::where('name','Home-Subtitle')->first();    
    $dialog = Detail::where('name','Home-Dialog')->first();

    //grouping them into a single array:
    $data =[
        "header" => $header->detail,
        "subtitle" =>$subtitle->detail,
         "dialog" => $dialog->detail
    ];

        //return home view::
        return view('homepage.index',['data'=>$data]);
    }
}

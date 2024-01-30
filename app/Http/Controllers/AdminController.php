<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    Public function SignIn(){
        return view('admin.SignIn');
    }

}

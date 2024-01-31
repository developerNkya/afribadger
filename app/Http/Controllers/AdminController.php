<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class AdminController extends Controller
{

    Public function SignIn(){
        return view('admin.SignIn');
    }

    
    Public function Login(Request $request){
        // getting values::
        $username = $request->username;
        $password = $request->password;


        // cheking if credidentials exist in database::
            $check_info = User::where('username',$username)
                                ->where('password',$password)
                                ->first();

            if (!$check_info) {
                $error = 'Incorrect Credidentials ....Try again!';

                return Redirect::to('sign-in')
                ->withErrors(['loginError' => $error]);
            }

            $active_user = $check_info->id;
            //add user to session::
            Session::put('active_user', $active_user);
            //redirect to admin -home-page::
            return view('admin.homepage');

    }

}

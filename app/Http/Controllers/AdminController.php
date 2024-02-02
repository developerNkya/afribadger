<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
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
            // return view('admin.home.homepage');
            return redirect('admin-home');

    }


   
    Public function  UpdateIntroText(Request $request){

        // getting values::
        $info =   $request->info;
        $option = $request->option;


         Detail::where('name', $option)->update(array('detail' => $info));


          return redirect()->back()->with('message', 'Data has been updated successfully!');

    }


    Public function AdminHomePage(){

        // check active_user session::
        $active_user = Session::get('active_user');
        return view('admin.home.homepage');
         
    }

    Public function EditIntroText(){

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
    
    return View('admin.home.introtext', ['data' => $data]);

        // return view('admin.home.introtext');
    }

}

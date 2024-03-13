<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Detail;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{

    public function Index()
    {

        //clear the active user::
        Session::put('active_user', '');

        //Fetch the values from db:
        $header = Detail::where('name', 'Home-Header')->first();
        $subtitle = Detail::where('name', 'Home-Subtitle')->first();
        $dialog = Detail::where('name', 'Home-Dialog')->first();

        //grouping them into a single array:
        $data = [
            "header" => $header->detail,
            "subtitle" => $subtitle->detail,
            "dialog" => $dialog->detail
        ];

        //return home view::
        return view('homepage.index', ['data' => $data]);
    }



    public function contactPage()
    {

        $user_info = UserInfo::get();


        //return home view::
        return view('homepage.contact',["user_info"=>$user_info]);
    }

    public function saveContact(Request $request)
    {

        // Validate the incoming request
        $validatedData = $request->validate([
            'name_contact' => 'required|string|max:255',
            'lastname_contact' => 'required|string|max:255',
            'email_contact' => 'required|email|max:255',
            'phone_contact' => 'required|string|max:20',
            'message_contact' => 'required|string',
        ]);

        // Check if email or phone already exist in the database
        $existingContact = Contact::where('email', $validatedData['email_contact'])
            ->orWhere('phone', $validatedData['phone_contact'])
            ->first();

        if ($existingContact) {
            return redirect()->back()->with('error', 'Contact with this email or phone number already exists.');
        }

        // Create a new Contact instance and save it to the database
        $contact = Contact::create([
            'name' => $validatedData['name_contact'],
            'lastname' => $validatedData['lastname_contact'],
            'email' => $validatedData['email_contact'],
            'phone' => $validatedData['phone_contact'],
            'message' => $validatedData['message_contact'],
        ]);

        return redirect()->back()->with('success', 'Thank you for your feedback!.');
    }

}

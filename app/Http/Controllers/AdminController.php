<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Tour;
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
        $title = 'Modify Homepage Text';
        

        $datas =[
            [
            "title" => 'Modify Homepage Text',
            "text" => 'Easily edit the Intro text at the introduction of the website.Make sure that the text is catchy and can be understood by visitors',
             "url" => '/edit-intro-text',
            ]
        ];

        return view('admin.home.homepage', ['datas' => $datas]);
         
    }


    Public function  AdminTourPage(){

        // check active_user session::
        // $active_user = Session::get('active_user');

        $datas = [
            [
                "title" => 'Easily Add New Tours',
                "text" => 'you can now add new tours and trips through this section, click proceed to continue',
                "url" => '/new-tour',
            ],
            [
                "title" => 'View Tours',
                "text" => 'you can now view all tours and trips through this section, click proceed to continue',
                "url" => '/view_all_tours',
            ],
            // Add more data objects as needed
        ];
        

        return view('admin.home.homepage', ['datas' => $datas]);
         
    }

   

    Public function viewTours(){

           // Fetch total number of tours
           $totalTours = Tour::count();

           // Fetch all rows from the tours table
           $tours = Tour::all();

          
       // Decode image paths for each tour
       foreach ($tours as $tour) {
        $tour->image_paths = json_decode($tour->image_paths, true);
    }

    // return $tours;
    // Pass the data to the view
    return view('admin.Tours.view_tours', [
        'totalTours' => $totalTours,
        'tours' => $tours,
    ]);
         
    }

    Public function  newTour(){

        return view('admin.Tours.newTrip');
         
    }

    public function saveTour(Request $request){

        // Validate the form data
        $validatedData = $request->validate([
            'tour_name' => 'required|string|max:255',
            'description' => 'required|string',
            'subtitle' => 'nullable|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // assuming images are uploaded
        ]);
    
        // Get the input values
        $tourName = $request->input('tour_name');
        $description = $request->input('description');
        $subtitle = $request->input('subtitle');
    
        //query the db to check if similar tour exist 
        //if yes return Tour already exists!
        //Tour saved successfully.
        // Process and store the images
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('public/images');
                $imagePaths[] = $imagePath;
            }
        }
    
        // Save the tour details and image paths to the database
        $tour = new Tour();
        $tour->name = $tourName;
        $tour->description = nl2br($description); // Convert newlines to <br> tags to maintain paragraphs
        $tour->subtitle = $subtitle;
        $tour->image_paths = json_encode($imagePaths); // Save image paths as JSON array
        $tour->save();
    
        // Return the view or redirect
        // return view('admin.Tours.newTrip')->with('message', 'Tour saved successfully.');
        return redirect()->back()->with('message', 'Tour saved successfully.');

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

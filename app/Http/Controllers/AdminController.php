<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Detail;
use App\Models\Rating;
use App\Models\Tour;
use App\Models\User;
use App\Models\UserInfo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Session;

use Cloudinary\Api\Upload\UploadApi;



// Configure Cloudinary credentials (replace with your actual values)
// Configuration::instance([
//     'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
//     'api_key' => env('CLOUDINARY_API_KEY'),
//     'api_secret' => env('CLOUDINARY_API_SECRET')
// ]);

// Configuration::instance('cloudinary://922157771218568:Gf09s88DpokEJbpXXZdsamlZZdU@dvl5pb8hs?secure=true');

class AdminController extends Controller
{

    public function SignIn()
    {
        return view('admin.SignIn');
    }

    public function singleTour(Request $request, $id)
    {
        // Pull data of the particular tour based on the $id parameter

        $tours = Tour::where('id', $id)->get();

        $ratings = Rating::with('tour')->where('tour_id', $id)
            ->where('status', 'approved')
            ->get();


            $total_bookings = Booking::where('tour_id', $id)->count();

        //decoding the imagepaths::
        foreach ($tours as $tour) {
            $tour->image_paths = json_decode($tour->image_paths, true);
        }

        return view('admin.Tours.single_tour', ['tours' => $tours, 'ratings' => $ratings, 'total_bookings'=>$total_bookings]);
    }




    public function fetchSimilarReviews($input)
    {
        // Get the IDs of tours with names similar to the input
        $tourIds = Tour::where('name', 'like', '%' . $input . '%')->pluck('id')->take(5);

        // Get 5 similar ratings for tours with similar names
        $ratings = Rating::with('tour')
            ->whereIn('tour_id', $tourIds)
            ->limit(5)
            ->get();

        //all ratings
        $allRatings = Rating::with('tour')->get();
        $totalRatings = $allRatings->count();
        $pendingRatings = $allRatings->filter(function ($rating) {
            return $rating->status === null || $rating->status === 'pending';
        })->count();

        $approvedRatings = $allRatings->where('status', 'approved')->count();

        return response()->json([
            'success' => true,
            'ratings' => $ratings,
            'totalRatings' => $totalRatings,
            'pendingRatings' => $pendingRatings,
            'approvedRatings' => $approvedRatings
        ]);

    }

    public function fetchSimilarBookings($input)
    {
        // Get the IDs of tours with names similar to the input
        $tourIds = Tour::where('name', 'like', '%' . $input . '%')->pluck('id')->take(5);

        // Get 5 similar ratings for tours with similar names
        $bookings = Booking::with('tour')
            ->whereIn('tour_id', $tourIds)
            ->limit(5)
            ->get();

        //all ratings
        $allBookings = Booking::with('tour')->get();
        $totalBookings = $allBookings->count();
        $pendingBookings = $allBookings->filter(function ($rating) {
            return $rating->status === null || $rating->status === 'pending';
        })->count();

        $approvedBookings = $allBookings->where('status', 'approved')->count();

        return response()->json([
            'success' => true,
            'bookings' => $bookings,
            'totalRatings' => $totalBookings,
            'pendingRatings' => $pendingBookings,
            'approvedRatings' => $approvedBookings
        ]);

    }

    public function RatingCategory($category)
    {

        $ratings = [];
        if ($category == 'total') {
            $ratings = Rating::with('tour')->get();
        } elseif ($category == 'pending') {
            $ratings = Rating::with('tour')->where('status', '!=', 'approved')->get();
        } elseif ($category == 'approved') {
            $ratings = Rating::with('tour')->where('status', 'approved')->get();

        }

        $allRatings = Rating::with('tour')->get();
        $totalRatings = $allRatings->count();
        $pendingRatings = $allRatings->filter(function ($rating) {
            return $rating->status === null || $rating->status === 'pending';
        })->count();

        $approvedRatings = $allRatings->where('status', 'approved')->count();

        return view(
            'admin.Ratings.ratings_home',
            [
                'ratings' => $ratings,
                'totalRatings' => $totalRatings,
                'pendingRatings' => $pendingRatings,
                'approvedRatings' => $approvedRatings
            ]
        );
    }



    public function AdminBookingsPage()
    {

        $bookings = Booking::with('tour')->get();
        $totalBookings = $bookings->count();
        $pendingBookings = $bookings->filter(function ($rating) {
            return $rating->status === null || $rating->status === 'pending';
        })->count();
        $approvedBookings = $bookings->where('status', 'approved')->count();

 
        return view(
            'admin.Booking.booking_home',
            [
                'bookings' => $bookings,
                'totalBookings' => $totalBookings,
                'pendingBookings' => $pendingBookings,
                'approvedBookings' => $approvedBookings
            ]

        );

    }
   


    public function UpdateProfile(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
        ]);
    
        // Retrieve the first row of UserInfo
        $userInfo = UserInfo::first();
    
        if ($userInfo) {
            // Update the user's profile using the validated data
            // $userInfo->update($validatedData);
            UserInfo::where('id', 1)->update([
                'username' => $validatedData['username'],
                'password' => $validatedData['password'],
                'address' => $validatedData['address'],
                'email' => $validatedData['email'],
                'phone_no' => $validatedData['phone'],
            ]);
    
            // Return a response indicating success
            return response()->json(['message' => 'Profile updated successfully'], 200);
        } else {
            // If no UserInfo found, return an error response
            return response()->json(['error' => 'No UserInfo found'], 404);
        }
    }
    
   
    public function  AdminProfile(){
        $user_info = UserInfo::get();

        return view(
            'admin.Profile',
            [
                'infos' => $user_info,
            ]

        );

    }
    public function AdminFeedbackPage()
    {

        $feedbacks = Contact::get();
        return view(
            'admin.Feedback.feedback_home',
            [
                'feedbacks' => $feedbacks,
            ]

        );

    }


    public function deleteFeedback(Request $request, $id)
    {
        $feedback = Contact::findOrFail($id);
        $feedback->delete();

        return redirect()->back()->with('success', 'Feedback is Deleted Successfully!');

    }

    public function UpdateRating(Request $request, $id)
    {
        // Pull data of the particular tour based on the $id parameter
        $current_status = Rating::where('id', $id)->pluck('status')->first();

        $updated_status = '';
        if ($current_status != 'approved') {

            $updated_status = 'approved';
        } else {
            $updated_status = 'pending';
        }

        Rating::where('id', $id)->update(['status' => $updated_status]);

        $ratings = Rating::with('tour')->get();
        $totalRatings = $ratings->count();
        $pendingRatings = $ratings->filter(function ($rating) {
            return $rating->status === null || $rating->status === 'pending';
        })->count();

        $approvedRatings = $ratings->where('status', 'approved')->count();


        return view(
            'admin.Ratings.ratings_home',
            [
                'ratings' => $ratings,
                'totalRatings' => $totalRatings,
                'pendingRatings' => $pendingRatings,
                'approvedRatings' => $approvedRatings
            ]
        );

    }

    public function AdminRatingsPage()
    {
        // // Pull data of the particular tour based on the $id parameter

        $ratings = Rating::with('tour')->get();

        $totalRatings = $ratings->count();
        $pendingRatings = $ratings->filter(function ($rating) {
            return $rating->status === null || $rating->status === 'pending';
        })->count();

        $approvedRatings = $ratings->where('status', 'approved')->count();

        return view(
            'admin.Ratings.ratings_home',
            [
                'ratings' => $ratings,
                'totalRatings' => $totalRatings,
                'pendingRatings' => $pendingRatings,
                'approvedRatings' => $approvedRatings
            ]
        );
    }
    public function Login(Request $request)
    {
        // getting values::
        $username = $request->username;
        $password = $request->password;


        // cheking if credidentials exist in database::
        $check_info = UserInfo::where('username', $username)
            ->where('password', $password)
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



    public function UpdateIntroText(Request $request)
    {

        // getting values::
        $info = $request->info;
        $option = $request->option;


        Detail::where('name', $option)->update(array('detail' => $info));


        return redirect()->back()->with('message', 'Data has been updated successfully!');

    }


    public function AdminHomePage()
    {
        // check active_user session::
        $active_user = Session::get('active_user');
        $title = 'Modify Homepage Text';



        $datas = [
            [
                "title" => 'Modify Homepage Text',
                "text" => 'Easily edit the Intro text at the introduction of the website.Make sure that the text is catchy and can be understood by visitors',
                "url" => '/edit-intro-text',
            ]
        ];
        return view('admin.home.homepage', ['datas' => $datas]);


    }


    public function AdminTourPage()
    {

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



    public function viewTours()
    {

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

    public function newTour()
    {

        return view('admin.Tours.newtrip');

    }

    public function saveTour(Request $request)
    {

        // Validate the form data
        $rules = $request->validate([
            'tour_name' => 'required|string|max:255',
            'price' => 'required',
            'location' => 'required',
            'description' => 'required|string',
            'subtitle' => 'nullable|string|max:255',
            'imagePaths' => 'required'
        ]);

        // // Define custom error messages
        // $messages = [
        //     'imagePaths.required' => 'Please upload at least one image.',
        // ];

        // // Create a validator instance
        // $validator = \Validator::make($request->all(), $rules, $messages);

        // // Check if validation fails
        // if ($validator->fails()) {
        //     // Return validation errors
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // Get the input values
        $tourName = $request->input('tour_name');
        $description = $request->input('description');
        $subtitle = $request->input('subtitle');
        $price = $request->input('price');

        $points = $request->input('categories');
        $descriptions = $request->input('category_descriptions');
        $location = $request->input('location');

        // adding points to a single array::
        $pointsWithDescriptions = [];

        // Assuming both arrays have the same length
        foreach ($points as $key => $point) {
            // Only add to the array if both point and description are present
            if (!empty($point) && !empty($descriptions[$key])) {
                $pointsWithDescriptions[$point] = $descriptions[$key];
            }
        }

        $pointsWithDescriptions = [$pointsWithDescriptions];


        // $imagePaths = [];

        //old implementation::
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $imagePath = $image->store('public/images');
        //         $imagePaths[] = $imagePath;
        //     }
        // }


        //new save implementation
        // $imagePaths = $request->imagePaths;
        $imagePaths = json_decode($request->input('imagePaths'), true);


        // return response()->json([
        //     'success' => false,
        //     'message' => $decoded
        // ]);

        // // Save the tour details and image paths to the database
        $tour = new Tour();
        $tour->name = $tourName;
        $tour->description = nl2br($description); // Convert newlines to <br> tags to maintain paragraphs
        $tour->subtitle = $subtitle;
        $tour->price = $price;
        $tour->location = $location;
        $tour->packages = json_encode($pointsWithDescriptions);
        $tour->image_paths = json_encode($imagePaths); // Save image paths as JSON array
        $tour->save();

        // Return the view or redirect
        // return view('admin.Tours.newTrip')->with('message', 'Tour saved successfully.');
        return redirect()->back()->with('message', 'Tour saved successfully.');

    }


    public function EditIntroText()
    {

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

        return View('admin.home.introtext', ['data' => $data]);

        // return view('admin.home.introtext');
    }

}

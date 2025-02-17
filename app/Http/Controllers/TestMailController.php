<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class TestMailController extends Controller
{


    public function mail()
{

    $data = [
            'name' => "Arman Rahman",
        ];

        $mail = new TestMail($data);
        Mail::to("info@camelleonsafaris.com")->send($mail);

          return response()->json([
            'status' => 'success',
            'message' => 'Booking successful!',
        ]);
}


}

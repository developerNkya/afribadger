<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPage()
    {
        return view('contact_us.contact_us');
    }

    public function postedRequest(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'request' => 'nullable|string|max:500',
            'preference' => 'required|string|in:email,whatsapp,calls',
        ]);

        // Return data as JSON
        return response()->json([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'request' => $validated['request'],
            'preference' => $validated['preference']
        ]);
    }

}

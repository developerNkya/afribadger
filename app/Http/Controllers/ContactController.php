<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactRequest;
use App\Mail\ContactRequestMail;

class ContactController extends Controller
{
    public function contactPage()
    {
        return view('contact_us.contact_us');
    }

   
    
    public function postedRequest(Request $request)
    {
        $messages = [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'phone.string' => 'Your phone number must be valid text.',
            'phone.max' => 'Your phone number cannot exceed 20 characters.',
            'preference.required' => 'Please select a contact preference.',
            'preference.in' => 'Please select a valid contact preference (email, WhatsApp, or calls).',
        ];
    
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => [
                'required',
                'string',
                'max:20',
                'regex:/^\+\d{1,4}\d{6,}$/',
            ],
            'request' => 'required|string|max:500',
            'preference' => 'required|in:email,whatsapp,calls',
        ], $messages);
    
        try {
            DB::beginTransaction();
    
            $existingRequest = ContactRequest::where([
                'email' => $validated['email'],
                'phone' => $validated['phone'],
            ])->first();
    
            if ($existingRequest) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'You have already submitted a request.',
                ], 400);
            }
    
            $contactRequest = ContactRequest::create($validated);
    
            Mail::to("info@camelleonsafaris.com")->send(new ContactRequestMail($contactRequest));
    
            DB::commit();
    
            return response()->json([
                'status' => 'success',
                'message' => 'Your request has been submitted successfully!'
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Contact request error: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong, please try again later.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    

}

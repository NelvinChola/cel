<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    // Show the contact form view
    public function show()
    {
        return view('cel2.contact'); // This will render resources/views/contact.blade.php
    }

    // Handle the form submission
    public function submit(Request $request)
    {
        // 1. Validate the request
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // 2. Send the email
        Mail::to('nelvinchola.dev@outlook.com') // Send to your company email
            ->send(new ContactFormMail($validated));

        // 3. Redirect back with a success message
        return redirect()->back()
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
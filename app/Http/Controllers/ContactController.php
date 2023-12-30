<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $email = env('MAIL_FROM_ADDRESS');
        $mail = Mail::to($email)->send(new ContactMail($data));

        if (!$mail) {
            return redirect()->back()->with('error', 'There was a problem sending your message. Please try again.')->with('scrollTo', 'contact');
        } else {
            // Redirect back with success message and fragment identifier
            return redirect()->back()->with('success', 'Your message has been sent. Thank you!')->with('scrollTo', 'contact');
        }
    }
}


<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index () {
        return view('contact');
    }

    public function sendEmail (Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('jellevandepoel@gmail.com')->send(new ContactMail($data));

        return view('contact', [
            'message' => 'Your message has been sent!'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('contact.contact');
    }

    public function mail(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        Mail::to('hello@aicomylleville.be')->send(new ContactMail($firstname, $lastname, $email, $subject, $message));

        return view('contact.thanks', ['firstname' => $firstname, 'email' => $email]);
    }
}

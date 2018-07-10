<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\ContactEmail;

class ContactMessageController extends Controller
{
    public function create()
    {
          return view('/contacts');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);


        Mail::to(env('SEND_EMAIL_FROM'))->send(new ContactEmail($request));
        return redirect()->back()->with('flash_message','Thank you for contacting!');
    }
}

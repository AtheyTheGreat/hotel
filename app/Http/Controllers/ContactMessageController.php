<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
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

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactEmail($request->all()));
        return redirect()->back()->with('flash_message','Thank you for contacting!');
    }
}

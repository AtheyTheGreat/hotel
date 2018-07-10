<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;



class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $contact['firstname'] = $request->get('firstname');
        $contact['lastname']  = $request->get('lastname');
        $contact['email']     = $request->get('email');
        $contact['message']   = $request->get('message');



        \Mail::to(config('mail.support.address'))->send(new ContactEmail($contact));


        flash('Your Message Has Been Sent!')->success();

        return redirect()>route('contact.create');

    }

}

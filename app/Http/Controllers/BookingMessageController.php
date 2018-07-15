<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingMessageController extends Controller
{
    public function create()
    {
        return view('/bookings');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);


        Mail::to(env('SEND_EMAIL_FROM'))->send(new BookingEmail($request));
        return redirect()->back()->with('flash_message','Thank you for your Reservation we will get back to you.');
    }
}

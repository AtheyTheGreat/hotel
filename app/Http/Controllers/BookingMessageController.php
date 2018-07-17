<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\BookingEmail;
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
            'check_in' => 'required',
            'check_out' => 'required',
            'hotel'   => 'required',
            'rooms' => 'required',
            'adults' => 'required',
            'child' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);


        Mail::to(env('MAIL_TO_ADDRESS'))->send(new BookingEmail($request));
        return redirect()->back()->with('flash_message','Thank you for your Reservation we will get back to you.');
    }
}

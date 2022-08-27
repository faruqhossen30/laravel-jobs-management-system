<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contactMail(){
        return view('frontend.contactpage');
    }

    public function sendMail(Request $request)
    {
        $details =[
            'name' =>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'massage'=>$request->massage
        ];

        Mail::to('bdjob24@example.com')->send(new ContactMail( $details));
        return back()->with('massage_sent','Your massage has been sent successfully!');
    }
}

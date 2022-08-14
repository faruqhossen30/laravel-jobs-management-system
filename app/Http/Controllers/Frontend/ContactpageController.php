<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactpageController extends Controller
{
    public function contactPage()
    {
        return view('frontend.contactpage');
    }
}

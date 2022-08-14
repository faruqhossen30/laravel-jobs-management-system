<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutpageController extends Controller
{
    public function aboutPage()
    {
        return view('frontend.aboutpage');
    }
}

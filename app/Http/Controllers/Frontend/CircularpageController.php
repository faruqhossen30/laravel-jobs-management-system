<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CircularpageController extends Controller
{
    public function circularPage()
    {
        return view('frontend.circularpage');
    }
}

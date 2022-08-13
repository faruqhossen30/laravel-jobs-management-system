<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobdetailspageController extends Controller
{
    public function jobdetailspage()
    {
        return view('frontend.jobdetailspage');
    }
}

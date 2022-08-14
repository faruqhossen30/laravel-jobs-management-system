<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobindustrypageController extends Controller
{
    public function jobindustryPage()
    {
        return view('frontend.jobindustrypage');
    }
}



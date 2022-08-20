<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\JobIndustry;
use Illuminate\Http\Request;

class JobindustrypageController extends Controller
{
    public function jobindustryPage()
    {
        $jobindustries = JobIndustry::take(20)->get();
        return view('frontend.jobindustrypage',compact('jobindustries'));
    }
}



<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobIndustry;
use App\Models\Category;

class HomepageController extends Controller
{
    public function homePage()
    {
        $jobindustries = JobIndustry::get();
        $categories = Category::get();
        return view('frontend.homepage',compact('jobindustries','categories'));
    }
}

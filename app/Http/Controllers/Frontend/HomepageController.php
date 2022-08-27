<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobIndustry;
use App\Models\Category;
use App\Models\Circular;

class HomepageController extends Controller
{
    public function homePage()
    {
        $jobindustries = JobIndustry::take(8)->get();
        $categories = Category::get();
        $circulars = Circular::latest()
        ->with('category', 'company', 'jobindustries.jobindustry', 'skills.skill')
        ->take(5)->get();

        // return $circulars;
        return view('frontend.homepage',compact('jobindustries','categories', 'circulars'));
    }
}

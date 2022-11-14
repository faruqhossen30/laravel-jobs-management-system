<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Circular;
use App\Models\JobIndustry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function homePage()
    {
        $jobindustries = JobIndustry::take(8)->get();
        $categories = Category::get();
        $circulars = Circular::latest()
        ->with('category', 'company', 'jobindustries.jobindustry', 'skills.skill')
        ->take(5)->get();
        $blogs = Blog::with('user')->take(3)->latest()->get();
        // return $circulars;
        return view('frontend.homepage',compact('jobindustries','categories', 'circulars', 'blogs'));
    }
}

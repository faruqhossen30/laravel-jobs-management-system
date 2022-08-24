<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogpageController extends Controller
{
    public function blogpage()
    {
        $blogs = Blog::paginate(10);
        return view('frontend.blog-page', compact('blogs'));
    }
}

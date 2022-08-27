<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;

class BlogpageController extends Controller
{
    public function blogpage()
    {
        $blogs = Blog::paginate(10);
        return view('frontend.blog-page', compact('blogs'));
    }
    public function singleblog($id)
    {
        $blog = Blog::with('user')->where('id',$id)->first();

        // return $blog;
        return view('frontend.singel-blog', compact('blog'));

    }

}

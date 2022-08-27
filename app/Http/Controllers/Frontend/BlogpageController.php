<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
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
        $categories = BlogCategory::get();

        // return $blog;
        return view('frontend.singel-blog', compact('blog', 'categories'));

    }

}

<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Category;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BlogpageController extends Controller
{
    public function blogpage()
    {
        $blogs = Blog::paginate(10);
        $mostreadblog = Blog::orderBy('view_count','desc')->take(4)->get();
        // return $mostreadblog;
        return view('frontend.blog-page', compact('blogs', 'mostreadblog'));
    }
    public function singleblog($id)
    {

        $blog = Blog::with('user')->where('id',$id)->first();
        $categories = BlogCategory::get();
        $mostreadblog = Blog::orderBy('view_count', 'desc')->take(4)->get();
        $blogkey = 'blog_' . $blog->id;
        if (!Session::has($blogkey)) {
            $blog->increment('view_count');
            Session::put($blogkey, 1);
        }
        $tags = Blog::all();

        return view('frontend.singel-blog', compact('blog', 'categories', 'tags', 'mostreadblog'));

    }

}

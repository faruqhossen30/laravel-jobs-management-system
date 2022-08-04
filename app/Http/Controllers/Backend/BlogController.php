<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Education;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.blog.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //    return $request->all();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/blog',
                $uniquename
            );
            $thumbnailname = $uniquename;
        }

        $data = [
            'title' => $request->title,
            'slug' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'thumbnail' => $thumbnailname,
            'category_id' => json_encode($request->category_id),
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_tag' => $request->meta_tag,

        ];



        Blog::create($data);
        Session::flash('create');
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::firstWhere('id',$id);
        return view('backend.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::firstWhere('id',$id);
        $categories = Category::get();
        return view('backend.blog.edit', compact('blog','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

//    return $request->all();

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/blog',
                $uniquename
            );
            $thumbnailname = $uniquename;
        }


        if($thumbnailname){
            $data = [
                'title' => $request->title,
                'slug' => $request->title,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
                'thumbnail' => $thumbnailname,
                'category_id' => json_encode($request->category_id),
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_tag' => $request->meta_tag,

            ];

            $file = Blog::firstwhere('id', $id)->thumbnail;
            if($file){
                Storage::disk('public')->delete('blog/' . $file);
            }


            Blog::firstwhere('id', $id)->update($data);
            Session::flash('update');
            return redirect()->route('blog.index');
        }else{
            $data = [
                'title' => $request->title,
                'slug' => $request->title,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
                'category_id' => json_encode($request->category_id),
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_tag' => $request->meta_tag,
            ];

            Blog::firstwhere('id', $id)->update($data);
            Session::flash('update');
            return redirect()->route('blog.index');


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Blog::firstwhere('id', $id)->thumbnail;
        if($file){
            Storage::disk('public')->delete('blog/' . $file);
        }
        Blog::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('blog.index');
    }
}

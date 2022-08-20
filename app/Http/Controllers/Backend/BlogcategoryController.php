<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BlogcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogcategories = BlogCategory::get();
        return view('backend.blog-category.index', compact('blogcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $thumbnailname = null;


        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'user_id' => Auth::user()->id,
            'thumbnail' => $thumbnailname
        ];

        BlogCategory::create($data);
        Session::flash('create');
        return redirect()->route('blogcategory.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogcategory = BlogCategory::firstWhere('id',$id);
        return view('backend.blog-category.show', compact('blogcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogcategory = BlogCategory::firstWhere('id',$id);
        return view('backend.blog-category.edit', compact('blogcategory'));
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
        $request->validate([
            'name' => 'required'
        ]);

        $thumbnailname = null;


            $data = [
                'name' => $request->name,
                'slug' => $request->name,
                'user_id' => Auth::user()->id
            ];
            BlogCategory::firstwhere('id', $id)->update($data);
            Session::flash('update');
            return redirect()->route('blogcategory.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        BlogCategory::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('blogcategory.index');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Faker\Core\Uuid;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Education;
use Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs                 =  Blog::get();
        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories            =  Category::get();
        return view('backend.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request->all();
        $request->validate([
            'title'            => 'required',
            'description'      => 'required',
        ]);

        $blogimage             =  null;
        if ($request->file('thumbnail')) {
            $imagethumbnail    =  $request->file('thumbnail');
            $extension         =  $imagethumbnail->getClientOriginalExtension();
            $blogimage         =  Str::uuid() . '.' . $extension;
            Image              :: make($imagethumbnail)->save('uploads/blog/' . $blogimage);
        }
        $data                  =  [
            'title'            => $request->title,
            'slug'             => $request->title,
            'description'      => $request->description,
            'user_id'          => Auth::user()->id,
            'thumbnail'        => $blogimage,
            'category_id'      => json_encode($request->category_id),
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            // 'meta_tag'      => $request->meta_tag,
            'meta_tag'         => json_encode($request->meta_tag),

        ];
        Blog                   :: create($data);
        Session                :: flash('create');
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
        $blog                  =  Blog::firstWhere('id', $id);
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
        $blog                  =  Blog::firstWhere('id', $id);
        $categories            =  Category::get();
        return view('backend.blog.edit', compact('blog', 'categories'));
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
            'title'            => 'required',
            'description'      => 'required',
        ]);

        $blogimage             =  null;
        if ($request->file('thumbnail')) {
            $imagethumbnail    =  $request->file('thumbnail');
            $extension         =  $imagethumbnail->getClientOriginalExtension();
            $blogimage         =  Str::uuid() . '.' . $extension;
            Image              :: make($imagethumbnail)->save('uploads/blog/' . $blogimage);
        }
        $data                  =  [
            'title'            => $request->title,
            'slug'             => $request->title,
            'description'      => $request->description,
            'user_id'          => Auth::user()->id,
            'thumbnail'        => $blogimage,
            'category_id'      => json_encode($request->category_id),
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_tag'         => json_encode($request->meta_tag),

        ];
        Blog                   :: firstWhere('id', $id)->update($data);
        Session                :: flash('update');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file                  =  Blog::firstwhere('id', $id)->thumbnail;
        if ($file) {
            Storage            :: disk('public')->delete('blog/' . $file);
        }
        Blog                   :: firstwhere('id', $id)->delete();
        Session                :: flash('delete');
        return redirect()->route('blog.index');
    }
}

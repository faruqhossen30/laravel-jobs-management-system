<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Circular;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CircularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $circulars = Circular::get();
        return view('backend.circular.index', compact('circulars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.circular.create');
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
            'title' => 'required',
            'description' => 'required',
        ]);

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/circular',
                $uniquename
            );
            $thumbnailname = $uniquename;
        }

        $data = [
            'title' => $request->title,
            'slug' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'thumbnail' => $thumbnailname
        ];

        Circular::create($data);
        Session::flash('create');
        return redirect()->route('circular.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $circular = Circular::firstWhere('id',$id);
        return view('backend.circular.show', compact('circular'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $circular = Circular::firstWhere('id',$id);
        return view('backend.circular.edit', compact('circular'));
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
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/circular',
                $uniquename
            );
            $thumbnailname = $uniquename;
        }


        if($thumbnailname){
            $data = [
                'name' => $request->name,
                'slug' => $request->name,
                'user_id' => Auth::user()->id,
                'thumbnail' => $thumbnailname
            ];

            $file = Circular::firstwhere('id', $id)->thumbnail;
            if($file){
                Storage::disk('public')->delete('circular/' . $file);
            }


            Circular::firstwhere('id', $id)->update($data);
            Session::flash('update');
            return redirect()->route('circular.index');
        }else{
            $data = [
                'name' => $request->name,
                'slug' => $request->name,
                'user_id' => Auth::user()->id
            ];
            Circular::firstwhere('id', $id)->update($data);
            Session::flash('update');
            return redirect()->route('circular.index');

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
        $file = Circular::firstwhere('id', $id)->thumbnail;
        if($file){
            Storage::disk('public')->delete('circular/' . $file);
        }
        Circular::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('circular.index');
    }
}

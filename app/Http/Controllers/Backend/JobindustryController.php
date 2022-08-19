<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JobIndustry;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class JobindustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobindustries = JobIndustry::get();
        return view('backend.jobindustry.index',compact('jobindustries'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jobindustry.create');
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
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/jobindustry',
                $uniquename
            );
            $thumbnailname = $uniquename;
        }

        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'user_id' => Auth::user()->id,
            'thumbnail' => $thumbnailname
        ];

        JobIndustry::create($data);
        Session::flash('create');
        return redirect()->route('jobindustry.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobindustry = JobIndustry::firstWhere('id',$id);
        return view('backend.jobindustry.show', compact('jobindustry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobindustry = JobIndustry::firstWhere('id',$id);
        return view('backend.jobindustry.edit', compact('jobindustry'));
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
                'public/jobindustry',
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

            $file = JobIndustry::firstwhere('id', $id)->thumbnail;
            if($file){
                Storage::disk('public')->delete('jobindustry/' . $file);
            }


            JobIndustry::firstwhere('id', $id)->update($data);
            Session::flash('update');
            return redirect()->route('jobindustry.index');
        }else{
            $data = [
                'name' => $request->name,
                'slug' => $request->name,
                'user_id' => Auth::user()->id
            ];

        JobIndustry::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('jobindustry.index');
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
        $file = JobIndustry::firstwhere('id', $id)->thumbnail;
        if($file){
            Storage::disk('local')->delete('public/jobindustry/' . $file);
        }
        Jobindustry::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('jobindustry.index');
    }
}

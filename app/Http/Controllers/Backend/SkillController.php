<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::get();
        return view('backend.skill.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.skill.create');
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

        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'user_id' => Auth::user()->id

        ];

        Skill::create($data);
        Session::flash('create');
        return redirect()->route('skill.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skill = Skill::firstWhere('id',$id);
        return view('backend.skill.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::firstWhere('id',$id);
        return view('backend.skill.edit', compact('skill'));
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

        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'user_id' => Auth::user()->id
        ];

        Skill::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Skill::firstwhere('id', $id)->thumbnail;
        if($file){
            Storage::disk('local')->delete('public/skill/' . $file);
        }
        Skill::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('skill.index');
    }
}

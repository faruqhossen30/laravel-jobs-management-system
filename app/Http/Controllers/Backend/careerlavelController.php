<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CareerLevel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;



class CareerlavelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careerlavels = CareerLevel::get();
        return view('backend.careerlavel.index',compact('careerlavels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.careerlavel.create');
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

        CareerLevel::create($data);
        Session::flash('create');
        return redirect()->route('careerlavel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $careerlavel = CareerLevel::firstWhere('id',$id);
        return view('backend.careerlavel.show', compact('careerlavel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $careerlavel = CareerLevel::firstWhere('id',$id);
        return view('backend.careerlavel.edit', compact('careerlavel'));
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

        CareerLevel::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('careerlavel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CareerLevel::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('careerlavel.index');
    }
}

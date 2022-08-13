<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;



class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {

        return view('backend.user.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // return $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

                $id =Auth::user()->id;



                $thumbnailname = null;
                if ($request->file('image')) {
                    $extention = $request->file('image')->getClientOriginalExtension();
                    $uniquename = uniqid().'.'.$extention;

                    $request->file('image')->storeAs(
                        'public/profile-picture',
                        $uniquename
                    );
                    $thumbnailname = $uniquename;
                }


                if($thumbnailname){
                    $data = [
                        'name' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'address' => $request->address,
                        'image' => $thumbnailname
                    ];

                    $file = User::find($id)->image;
                    if($file){
                        Storage::disk('public')->delete('profile-picture/'.$file);
                    }


                        User::findOrFail($id)->update($data);
                        Session::flash('update');
                        return redirect()->route('user.index');

                }else{
                    $data = [
                        'name' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'address' => $request->address
                    ];

                        User::findOrFail($id)->update($data);
                        Session::flash('update');
                        return redirect()->route('user.index');

                }


        //          $data = [
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'phone' => $request->phone,
        //         'address' => $request->address,
        //         'image' => $request->image,

        // ];
        // User::find($id)->update($data);
        // Session::flash('update');
        // return redirect()->route('user.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

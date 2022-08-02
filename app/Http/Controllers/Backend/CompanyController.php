<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::get();
        return view('backend.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.company.create');
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
            'name' => 'required',
            'address' => 'required'
        ]);

        $logoName = null;
        if ($request->file('logo')) {
            $extention = $request->file('logo')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('logo')->storeAs(
                'public/companylogo',
                $uniquename
            );
            $logoName = $uniquename;
        }

        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
            'address' => $request->address,
            'address' => $request->address,
            'user_id' => Auth::user()->id,
            'logo' => $logoName
        ];

        Company::create($data);
        Session::flash('create');
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::firstWhere('id',$id);
        return view('backend.company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::firstWhere('id',$id);
        return view('backend.company.edit', compact('company'));
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
            'name' => 'required',
            'address' => 'required'
        ]);

        $logoName = null;
        if ($request->file('logo')) {
            $extention = $request->file('logo')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('logo')->storeAs(
                'public/companylogo',
                $uniquename
            );
            $logoName = $uniquename;
        }


        if($logoName){
            $data = [
                'name' => $request->name,
                'slug' => $request->name,
                'description' => $request->description,
                'email' => $request->email,
                'address' => $request->address,
                'address' => $request->address,
                'user_id' => Auth::user()->id,
                'logo' => $logoName
            ];

            $file = Company::firstwhere('id', $id)->logo;
            if($file){
                Storage::disk('public')->delete('companylogo/' . $file);
            }


            Company::firstwhere('id', $id)->update($data);
            Session::flash('update');
            return redirect()->route('company.index');
        }else{
            $data = [
                'name' => $request->name,
                'slug' => $request->name,
                'description' => $request->description,
                'email' => $request->email,
                'address' => $request->address,
                'address' => $request->address,
                'user_id' => Auth::user()->id

            ];
            Company::firstwhere('id', $id)->update($data);
            Session::flash('update');
            return redirect()->route('company.index');

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
        $file = Company::firstwhere('id', $id)->thumbnail;
        if($file){
            Storage::disk('public')->delete('companylogo/' . $file);
        }
        Company::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('company.index');
    }
}

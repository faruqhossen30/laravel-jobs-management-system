<?php

namespace App\Http\Controllers;


use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\JobIndustry;
use File;
use Image;
use App\Models\Circular;


class UsercompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::get();
        return view('userend.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobindustries = JobIndustry::orderBy('name','asc')->get();
        return view('userend.company.create',compact('jobindustries'));
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
            'name' => 'required',
            'address' => 'required'
        ]);
        $logo_name = null;
        if ($request->file('logo')) {
            $company_logo = $request->file('logo');
            $extension = $company_logo->getClientOriginalExtension();
            $logo_name = Str::uuid() . '.' . $extension;
            Image::make($company_logo)->save('uploads/company/' . $logo_name);
        }
        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
            'address' => $request->address,
            'address' => $request->address,
            'user_id' => Auth::user()->id,
            'logo' => $logo_name,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'google_map' => $request->google_map,
            'industry' =>json_encode($request->job_industry),
            'total_office' => $request->total_office,
            'employ_range' => $request->employ_range,
            'establish' => $request->establish,
            'ceo_name' => $request->ceo_name,
            'mobile' => $request->mobile,
            'ownership_type' => $request->ownership_type,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
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
        return view('userend.company.show', compact('company'));
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

        // return $company->industry;


        $jobindustries = JobIndustry::get();
        return view('userend.company.edit', compact('company','jobindustries'));
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
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);
        $company=Company::firstWhere('id',$id);

        $logo_name = null;
        if ($request->file('logo')) {
            $company_logo = $request->file('logo');
            $extension = $company_logo->getClientOriginalExtension();
            $logo_name = Str::uuid() . '.' . $extension;
            Image::make($company_logo)->save('uploads/company/' . $logo_name);

            // if(File::exists($logo_name->logo)){
            //     unlink($logo_name->logo);
            // }

        }
        $data = [
            'name' => $request->name,
            'slug' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
            'address' => $request->address,
            'address' => $request->address,
            'user_id' => Auth::user()->id,
            'logo' => $logo_name,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'google_map' => $request->google_map,
            // 'industry' => $request->industry,
            'industry' =>json_encode($request->job_industry),

            'total_office' => $request->total_office,
            'employ_range' => $request->employ_range,
            'establish' => $request->establish,
            'ceo_name' => $request->ceo_name,
            'mobile' => $request->mobile,
            'ownership_type' => $request->ownership_type,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
        ];
        Company::firstwhere('id',$id)->update($data);
        Session::flash('update');
        return redirect()->route('company.index');
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
            Storage::disk('public')->delete('uploads/company' . $file);
        }
        Company::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('company.index');
    }
}

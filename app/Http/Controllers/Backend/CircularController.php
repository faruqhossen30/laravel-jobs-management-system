<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CareerLevel;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Circular;
use App\Models\Education;
use App\Models\Jobindustry;
use App\Models\JobTypes;
use App\Models\SalaryPeriod;
use App\Models\Skill;
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
        $categories = Category::get();
        $educatios = Education::get();
        $skills = Skill::get();
        $jobindustries = Jobindustry::get();
        $careerlabels = CareerLevel::get();
        $salarypreiods = SalaryPeriod::get();
        $jobtypes = JobTypes::get();

        return view('backend.circular.create', compact('categories', 'educatios','skills','jobindustries','careerlabels','salarypreiods','jobtypes'));
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
            'thumbnail' => $thumbnailname,
            'category_id' => $request->category_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'organization_name' => $request->organization_name,
            'organization_website' => $request->organization_website,
            'apply_link' => $request->apply_link,
            'vacancy' => $request->vacancy,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_tag' => $request->meta_tag,
            'education' => json_encode($request->education),
            'skill' => json_encode($request->skill),
            'job_industry' => json_encode($request->job_industry),
            'career_label' => json_encode($request->career_label),
            'salary_period' => json_encode($request->salary_period),
            'job_type' => json_encode($request->job_type)
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
        //another
        $categories = Category::get();
        $educatios = Education::get();
        $skills = Skill::get();
        $jobindustries = Jobindustry::get();
        $careerlabels = CareerLevel::get();
        $salarypreiods = SalaryPeriod::get();
        $jobtypes = JobTypes::get();





        // return gettype($circular->skill);
        //   return $circular->job_industry;

        return view('backend.circular.edit', compact('circular','categories','categories','educatios','skills','jobindustries','careerlabels','salarypreiods','jobtypes'));



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
            'title' => 'required',
            'description' => 'required'
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
                'title' => $request->title,
                'slug' => $request->title,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
                'thumbnail' => $thumbnailname,
                'category_id' => $request->category_id,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'organization_name' => $request->organization_name,
                'organization_website' => $request->organization_website,
                'apply_link' => $request->apply_link,
                'vacancy' => $request->vacancy,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_tag' => $request->meta_tag,
                'education' => json_encode($request->education),
                'skill' => json_encode($request->skill),
                'job_industry' => json_encode($request->job_industry),
                'career_label' => json_encode($request->career_label),
                'salary_period' => json_encode($request->salary_period),
                'job_type' => json_encode($request->job_type)

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
                'title' => $request->title,
                'slug' => $request->title,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
                'category_id' => $request->category_id,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'organization_name' => $request->organization_name,
                'organization_website' => $request->organization_website,
                'apply_link' => $request->apply_link,
                'vacancy' => $request->vacancy,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_tag' => $request->meta_tag,
                'education' => json_encode($request->education),
                'skill' => json_encode($request->skill),
                'job_industry' => json_encode($request->job_industry),
                'career_label' => json_encode($request->career_label),
                'salary_period' => json_encode($request->salary_period),
                'job_type' => json_encode($request->job_type)
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

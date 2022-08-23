<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attributes\CircularCareerlabel;
use App\Models\Attributes\CircularEducation;
use App\Models\Attributes\CircularJobindustry;
use App\Models\Attributes\CircularJobtype;
use App\Models\Attributes\CircularSalaryperiod;
use App\Models\Attributes\CircularSkill;
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
        $circulars = Circular::latest()->paginate(25);
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
        $jobindustries = Jobindustry::orderBy('name','asc')->get();
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


        $data = [
            'title'                => $request->title,
            'slug'                 => $request->title,
            'description'          => $request->description,
            'user_id'              => Auth::user()->id,
            'thumbnail'            => $thumbnailname,
            'category_id'          => $request->category_id,
            'start_date'           => $request->start_date,
            'end_date'             => $request->end_date,
            'min_salary'           => $request->min_salary,
            'max_salary'           => $request->max_salary,
            'organization_name'    => $request->organization_name,
            'organization_website' => $request->organization_website,
            'apply_link'           => $request->apply_link,
            'vacancy'              => $request->vacancy,


            // 'education'     => json_encode($request->education),
            // 'skill'         => json_encode($request->skill),
            // 'job_industry'  => json_encode($request->job_industry),
            // 'career_label'  => json_encode($request->career_label),
            // 'salary_period' => json_encode($request->salary_period),
            // 'job_type'      => json_encode($request->job_type)
        ];



        $circular = Circular::create($data);

        if($circular){
            // Education
            if(!empty($request->education)){
                foreach($request->education as $education){
                    CircularEducation::create([
                        'circular_id' => $circular->id,
                        'education_id' => $education
                    ]);
                }
            }
            // Skill
            if(!empty($request->skill)){
                foreach($request->skill as $skill){
                    CircularSkill::create([
                        'circular_id' => $circular->id,
                        'skill_id' => $skill
                    ]);
                }
            }
            // job_industry
            if(!empty($request->job_industry)){
                foreach($request->job_industry as $job_industry){
                    CircularJobindustry::create([
                        'circular_id' => $circular->id,
                        'job_industry_id' => $job_industry
                    ]);
                }
            }
            // career_label
            if(!empty($request->career_label)){
                foreach($request->career_label as $career_label){
                    CircularCareerlabel::create([
                        'circular_id' => $circular->id,
                        'career_label_id' => $career_label
                    ]);
                }
            }
            // salary_period
            if(!empty($request->salary_period)){
                foreach($request->salary_period as $salary_period){
                    CircularSalaryperiod::create([
                        'circular_id' => $circular->id,
                        'salary_period_id' => $salary_period
                    ]);
                }
            }
            // job_type
            if(!empty($request->job_type)){
                foreach($request->job_type as $job_type){
                    CircularJobtype::create([
                        'circular_id' => $circular->id,
                        'job_type_id' => $job_type
                    ]);
                }
            }


        }


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
        $circular = Circular::with('educations', 'skills','jobindustries','careerlabels','jobtypes','salaryperiods')->firstWhere('id',$id);
        // return $circular;

        // return gettype($circular->educations->toArray());



        $categories = Category::get();
        $educatios = Education::get();
        $skills = Skill::get();
        $jobindustries = Jobindustry::get();
        $careerlabels = CareerLevel::get();
        $salarypreiods = SalaryPeriod::get();
        $jobtypes = JobTypes::get();
        $salaryperiods = SalaryPeriod::get();





        // return gettype($circular->skill);
        //   return $circular->job_industry;

        return view('backend.circular.edit', compact('circular','categories','categories','educatios','skills','jobindustries','careerlabels','salarypreiods','jobtypes', 'salaryperiods'));



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


            $data = [
            'title' => $request->title,
            'slug' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'thumbnail' => $thumbnailname,
            'category_id' => $request->category_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'min_salary' => $request->min_salary,
            'max_salary' => $request->max_salary,
            'organization_name' => $request->organization_name,
            'organization_website' => $request->organization_website,
            'apply_link' => $request->apply_link,
            'vacancy' => $request->vacancy,

            ];




            $circular = Circular::firstwhere('id', $id)->update($data);

            if($circular){
                // Education
                if(!empty($request->education)){
                    CircularEducation::where('circular_id', $id)->delete();
                    foreach($request->education as $education){
                        CircularEducation::create([
                            'circular_id' =>$id,
                            'education_id' => $education,
                        ]);
                    }
                }

                // Skill
            if(!empty($request->skill)){
                  CircularSkill::where('circular_id', $id)->delete();
                foreach($request->skill as $skill){
                    CircularSkill::create([
                        'circular_id' => $id,
                        'skill_id' => $skill
                    ]);
                }
            }
            // job_industry
            if(!empty($request->job_industry)){
                  CircularJobindustry::where('circular_id', $id)->delete();
                foreach($request->job_industry as $job_industry){
                    CircularJobindustry::create([
                        'circular_id' => $id,
                        'job_industry_id' => $job_industry
                    ]);
                }
            }
            // career_label
            if(!empty($request->career_label)){
                CircularCareerlabel::where('circular_id', $id)->delete();
                foreach($request->career_label as $career_label){
                    CircularCareerlabel::create([
                        'circular_id' => $id,
                        'career_label_id' => $career_label
                    ]);
                }
            }
            // salary_period
            if(!empty($request->salary_period)){
                CircularSalaryperiod::where('circular_id', $id)->delete();
                foreach($request->salary_period as $salary_period){
                    CircularSalaryperiod::create([
                        'circular_id' => $id,
                        'salary_period_id' => $salary_period
                    ]);
                }
            }
            // job_type
            if(!empty($request->job_type)){
                CircularJobtype::where('circular_id', $id)->delete();
                foreach($request->job_type as $job_type){
                    CircularJobtype::create([
                        'circular_id' => $id,
                        'job_type_id' => $job_type
                    ]);
                }
            }

            }



            Session::flash('update');
            return redirect()->route('circular.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Circular::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('circular.index');
    }
}

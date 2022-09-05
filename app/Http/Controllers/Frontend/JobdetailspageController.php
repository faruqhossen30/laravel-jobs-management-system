<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CareerLevel;
use App\Models\Circular;
use App\Models\Education;
use App\Models\JobTypes;
use App\Models\Skill;
use Illuminate\Http\Request;

class JobdetailspageController extends Controller
{
    public function jobdetailsPage($id)
    {
        $circular = Circular::where('id',$id)->first();
        // return $circular;

        // $educations = [];
        // if(json_decode($circular->job_type)){

        // }



            // $educations = Education::whereIn('id', json_decode($circular->education))->get();
            // $educations = [];
       $educations = Education::firstOrFail('id', json_decode($circular->education))->get();

                // $educations = Education::whereIn('id', json_decode($circular->education))->get();



        // return $circular->education;

        $skills = Skill::get();
        $careerlavels = CareerLevel::get();
        $jobtypes = JobTypes::get();




        // return $educations;


        return view('frontend.jobdetailspage',compact('circular', 'skills','careerlavels','jobtypes','educations'));
    }
}

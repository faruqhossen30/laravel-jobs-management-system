<?php

namespace App\Http\Controllers\Userend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Category;
use App\Models\Skill;
use App\Models\JobIndustry;

class SettingsController extends Controller
{
    public function index()
    {
        $educatios = Education::get();
        $categories = Category::get();
        $skills = Skill::get();
        $jobindustries = Jobindustry::orderBy('name','asc')->get();


        return view('userend.settings.setting-page',compact('educatios','categories','skills','jobindustries'));
    }
}

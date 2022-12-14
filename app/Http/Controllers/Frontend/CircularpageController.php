<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CareerLevel;
use Illuminate\Http\Request;
use App\Models\Circular;
use App\Models\Education;
use App\Models\JobIndustry;
use App\Models\JobTypes;

class CircularpageController extends Controller
{
    public function circularPage()
    {
        $keyword = null;
        if (isset($_GET['keyword'])) {
            $keyword = trim($_GET['keyword']);
        }

        $careerlabel = null;
        if (isset($_GET['careerlabel'])) {
            $careerlabel = $_GET['careerlabel'];
        }

        $queryjobtypes = null;
        if (isset($_GET['queryjobtypes'])) {
            $queryjobtypes = $_GET['queryjobtypes'];
        }

        $educatonquery = null;
        if (isset($_GET['educatonquery'])) {
            $educatonquery = $_GET['educatonquery'];
        }

        $jobindustryquery = null;
        if (isset($_GET['jobindustryquery'])) {
            $jobindustryquery = $_GET['jobindustryquery'];
        }
        // return $careerlabel;

        $careerlabels = CareerLevel::get();
        $jobtypes = JobTypes::get();
        $educations = Education::get();
        $jobindustries=JobIndustry::get();

        $circulars = Circular::when($keyword, function ($query, $keyword) {
            return $query->where('title', 'like', '%' . $keyword . '%');
        })
            ->when($careerlabel, function ($query, $careerlabel) {
                $query->whereHas('careerlabels', function ($query) use ($careerlabel) {
                    $query->whereIn('career_label_id', $careerlabel);
                });
            })
            ->latest()
            ->with('category', 'company', 'jobindustries.jobindustry', 'skills.skill')
            ->paginate(5);

        // return $circulars;

        return view('frontend.circularpage', compact('circulars', 'careerlabels', 'jobtypes', 'educations','jobindustries'));
    }
}

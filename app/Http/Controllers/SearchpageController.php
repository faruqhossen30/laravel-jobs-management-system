<?php

namespace App\Http\Controllers;

use App\Models\CareerLevel;
use App\Models\Circular;
use App\Models\JobTypes;
use Illuminate\Http\Request;

class SearchpageController extends Controller
{
    public function index(Request $request)
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

        // return $careerlabel;


        $careerlabels = CareerLevel::get();
        $jobtypes = JobTypes::get();

        $circulars = Circular::when($keyword, function($query, $keyword){
            return $query->where('title', 'like', '%' . $keyword . '%');
        })
        ->when($careerlabel, function($query, $careerlabel) {
            $query->whereHas('careerlabels', function($query) use($careerlabel) {
                $query->whereIn('career_label_id',$careerlabel);
            });
        })
        ->latest()
        ->with('category', 'company', 'jobindustries.jobindustry', 'skills.skill')
        ->paginate(5);

        return view('frontend.job-page.search-page',  compact('circulars', 'careerlabels', 'jobtypes'));
    }
}

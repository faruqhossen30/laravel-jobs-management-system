<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CareerLevel;
use Illuminate\Http\Request;
use App\Models\Circular;

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

        // return $careerlabel;


        $careerlabels = CareerLevel::get();

        $circulars = Circular::when($keyword, function($query, $keyword){
            return $query->where('title', 'like', '%' . $keyword . '%');
        })
        ->when($careerlabel, function($query, $careerlabel) {
            $query->whereHas('careerlabels', function($query) use($careerlabel) {
                $query->whereIn('career_label_id',$careerlabel);
            });
        })
        ->latest()
        ->with('category', 'company', 'jobindustries', 'skills.skill')
        ->paginate(5);

        // return $circulars;


        return view('frontend.circularpage', compact('circulars', 'careerlabels'));


    }
}

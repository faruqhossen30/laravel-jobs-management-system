<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Circular;

class CircularpageController extends Controller
{
    public function circularPage()
    {
        $circulars = Circular::latest()->paginate(20);
        return view('frontend.circularpage', compact('circulars'));


    }
}

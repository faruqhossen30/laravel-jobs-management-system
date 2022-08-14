<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqspageController extends Controller
{
    public function faqsPage()
    {
        return view('frontend.faqspage');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicepageController extends Controller
{
    public function servicePage()
    {
        return view('frontend.servicepage');
    }
}

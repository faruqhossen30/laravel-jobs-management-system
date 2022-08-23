<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanylistpageController extends Controller
{
    public function companylistPage()
    {
        return view('frontend.companylist');
    }
}

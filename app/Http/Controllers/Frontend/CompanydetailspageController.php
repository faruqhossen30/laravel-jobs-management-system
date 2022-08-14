<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanydetailspageController extends Controller
{
    public function companydetailsPage()
    {
        return view('frontend.company-detailspage');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminsettingController extends Controller
{
    public function adminSetting(){
        return view('backend.settings.setting-page');
    }
}

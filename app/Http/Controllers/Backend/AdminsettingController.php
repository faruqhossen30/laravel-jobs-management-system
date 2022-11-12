<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use App\Models\Settings;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class AdminsettingController extends Controller
{
    public function adminSetting()
    {
        $settings = Setting::first();

        // return  $settings ;
        return view('backend.settings.setting-page', compact('settings'));
    }


    public function adminSettingStore(Request $request)
    {
        if ($request->hasFile('logo')) {
            $name = $request->logo->getClientOriginalName();
            $request->logo->storeAs('images', $name, 'public');

            Setting::first()->update([
                'facebook'     => $request->facebook,
                'logo'         => $name,
                'twitter'      => $request->twitter,
                'linkedin'     => $request->linkedin,
                'instagram'    => $request->instagram,
                'youtube'      => $request->youtube,
                'address'      => $request->address,
                'mobile'       => $request->mobile,
                'phone'        => $request->phone,
                'email'        => $request->email,
                'whatsapp'     => $request->whatsapp,
                'working_day'  => $request->working_day,
                'working_time' => $request->working_time,
            ]);
            // return redirect()->back();

        }
        return redirect()->back();
    }
}

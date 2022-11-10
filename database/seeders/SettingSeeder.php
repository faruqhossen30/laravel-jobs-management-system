<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'facebook'     => "wwww.facebook.com",
            'twitter'      => 'www.twitter.com',
            'linkedin'     => 'www.linkedin.com',
            'instagram'    => 'www.instagram.com',
            'youtube'      => 'www.youtube.com',
            'address'      => 'jashore',
            'mobile'       => '+08801xxxxxxxx',
            'phone'        => '+02xxxxxx',
            'email'        => 'example@gmail.com',
            'whatsapp'     => '+8801xxxxxxxxx',
            'working_day'  => '9.00 -5.00',
            'working_time' => '8 hour',
        ]);
    }
}

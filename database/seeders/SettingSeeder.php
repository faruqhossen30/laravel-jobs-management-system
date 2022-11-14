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
            'facebook'     => "https://www.facebook.com/",
            'twitter'      => 'https://twitter.com/home',
            'linkedin'     => 'https://www.linkedin.com/',
            'instagram'    => 'https://www.instagram.com/',
            'youtube'      => 'https://www.youtube.com/',
            'address'      => 'jashore',
            'mobile'       => '+08801xxxxxxxx',
            'phone'        => '+02xxxxxx',
            'email'        => 'example@gmail.com',
            'whatsapp'     => 'https://web.whatsapp.com/',
            'working_day'  => '9.00 -5.00',
            'working_time' => '8 hour',
        ]);
    }
}

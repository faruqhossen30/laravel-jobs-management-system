<?php

namespace Database\Seeders;

use App\Models\CareerLevel;
use App\Models\Education;
use App\Models\JobIndustry;
use App\Models\JobTypes;
use App\Models\SalaryPeriod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JobattributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Education start
        $education = [
            [
                'name' => 'JSC',
                'slug' => 'jsc',
                'user_id' => 1
            ],
            [
                'name' => 'SSC',
                'slug' => 'ssc',
                'user_id' => 1
            ],
            [
                'name' => 'HSC',
                'slug' => 'hsc',
                'user_id' => 1
            ],
            [
                'name' => 'Diploma',
                'slug' => 'diploma',
                'user_id' => 1
            ],
            [
                'name' => 'BA',
                'slug' => 'ba',
                'user_id' => 1
            ],
            [
                'name' => 'B.s.c',
                'slug' => 'basc',
                'user_id' => 1
            ],
            [
                'name' => 'MA',
                'slug' => 'ma',
                'user_id' => 1
            ],
            [
                'name' => 'M.s.c',
                'slug' => 'msc',
                'user_id' => 1
            ],
        ];
        foreach($education as $item){
            Education::create($item);
        }
        // Education end

        // Job-type Start
        $jobtype = [
            [
                'name'    => 'Full time',
                'slug'    => 'full-time',
                'user_id' => 1
            ],
            [
                'name'    => 'Part time',
                'slug'    => 'part-time',
                'user_id' => 1
            ],
            [
                'name'    => 'Frelance',
                'slug'    => 'frelance',
                'user_id' => 1
            ],
            [
                'name'    => 'Contact Basic',
                'slug'    => 'contact-asic',
                'user_id' => 1
            ],
            [
                'name'    => 'Remote',
                'slug'    => 'remote',
                'user_id' => 1
            ]
        ];
        foreach($jobtype as $item){
            JobTypes::create($item);
        }
        // Job-type End
        // Salary Priod Start
        $salarypriod = [
            [
                'name'    => 'Monthly',
                'slug'    => 'monthly',
                'user_id' => 1
            ],
            [
                'name'    => 'Weekly',
                'slug'    => 'weekly',
                'user_id' => 1
            ],
            [
                'name'    => 'Yearly',
                'slug'    => 'yearly',
                'user_id' => 1
            ],
            [
                'name'    => 'Other',
                'slug'    => 'other',
                'user_id' => 1
            ]
        ];

        foreach($salarypriod as $item){
            SalaryPeriod::create($item);
        }

        // Salary Priod End
        $careerlabel = [
            [
                'name'    => 'Fresher',
                'slug'    => 'fresher',
                'user_id' => 1
            ],
            [
                'name'    => 'Intermidiate',
                'slug'    => 'intermidiate',
                'user_id' => 1
            ],
            [
                'name'    => 'Exprienced',
                'slug'    => 'exprienced',
                'user_id' => 1
            ],
        ];
        foreach($careerlabel as $item){
            CareerLevel::create($item);
        }

        // Job Industries Start
        $jobindustries = ["Accounting & Finance","Bank Jobs","Data Entry Job","Purchasing Manager","Project Manager","Education & training","Marketing & Advertising","Catering & Tourism","Government Jobs","Defence Jobs","Teaching Jobs","Retail & Customer Services","Diploma Jobs","Health Care Jobs","Manufacturing & production","Performing arts & media","It / Software Jobs","Logistics / Transportation","Sports Jobs","Forest Worker","Animal Care Worker","Digital Marketing","Administrative Officer","Garage services"];

        foreach($jobindustries as $item){
            JobIndustry::create([
                'name'    => $item,
                'slug'    => Str::slug($item, "-"),
                'user_id' => 1
            ]);
        };
    }
}

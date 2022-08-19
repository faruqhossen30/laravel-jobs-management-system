<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'    => 'Govt Job',
                'slug'    => 'goverment-job',
                'user_id' => 1,
            ],
            [
                'name'    => 'NGO',
                'slug'    => 'ngo',
                'user_id' => 1,
            ],
            [
                'name'    => 'Company',
                'slug'    => 'company',
                'user_id' => 1,
            ]
        ];
        $length = count($data);


        foreach ($data as $item) {
            Category::create($item);
        }
    }
}

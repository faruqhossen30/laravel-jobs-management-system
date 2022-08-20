<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
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


        foreach ($data as $item) {
            Category::create($item);
        }
        $categories = ['Govt Job', 'IT Job', 'Comapny Job', 'Bank Job'];

        foreach($categories as $item){
            BlogCategory::create([
                'name'    => $item,
                'slug'    => Str::slug($item, '-'),
                'user_id' => 1,
            ]);
        }
    }
}

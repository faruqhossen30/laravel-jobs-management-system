<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['MS word', 'powerpint', 'Typing'];

        foreach($data as $item){
            Skill::create([
                'name'=> $item,
                'slug'=> Str::slug($item, '-'),
                'user_id'=> 1
            ]);
        }
    }
}

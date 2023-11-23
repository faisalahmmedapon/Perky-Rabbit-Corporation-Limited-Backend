<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievements = array(

            ['name'=>'Employee of the Month'],
            ['name'=>'Innovation Award'],
            ['name'=>'Sales Excellence Award'],
            ['name'=>'Leadership Recognition'],
            ['name'=>'Customer Service Star'],
            ['name'=>'Team Player Award'],
            ['name'=>'Project Completion Champion'],
            ['name'=>'Continuous Learning Advocate'],
            ['name'=>'Quality Improvement Hero'],
            ['name'=>'Safety Excellence Award'],
            ['name'=>'Most Valuable Player (MVP)'],
            ['name'=>'Outstanding Performance in [Specific Area]'],
            ['name'=>'Extra Mile Award'],
            ['name'=>'Excellence in Collaboration'],
            ['name'=>'Employee Wellness Champion'],
            ['name'=>'Community Service Hero'],
            ['name'=>'Green Initiative Leader'],
            ['name'=>'Exceptional Problem Solver'],
            ['name'=>'Customer Satisfaction Expert'],
            ['name'=>'Rising Star Award'],

        );

        foreach ($achievements as $achievement){
            Achievement::updateOrCreate($achievement);
        }
    }
}

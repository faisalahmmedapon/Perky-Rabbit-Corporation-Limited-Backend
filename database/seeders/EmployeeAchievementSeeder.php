<?php

namespace Database\Seeders;

use App\Models\AchievementEmployee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeAchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievement_employees = [
            [
                'achievement_id' => '1',
                'employee_id' => '1',
                'achievement_date' => now(),
            ],

            [
                'achievement_id' => '2',
                'employee_id' => '1',
                'achievement_date' => now(),
            ],
            [
                'achievement_id' => '3',
                'employee_id' => '1',
                'achievement_date' => now(),
            ],
            [
                'achievement_id' => '4',
                'employee_id' => '1',
                'achievement_date' => now(),
            ],
            [
                'achievement_id' => '1',
                'employee_id' => '2',
                'achievement_date' => now(),
            ],

            [
                'achievement_id' => '2',
                'employee_id' => '2',
                'achievement_date' => now(),
            ],
            [
                'achievement_id' => '3',
                'employee_id' => '2',
                'achievement_date' => now(),
            ],
            [
                'achievement_id' => '4',
                'employee_id' => '2',
                'achievement_date' => now(),
            ],
            [
                'achievement_id' => '1',
                'employee_id' => '3',
                'achievement_date' => now(),
            ],

            [
                'achievement_id' => '2',
                'employee_id' => '3',
                'achievement_date' => now(),
            ],
            [
                'achievement_id' => '3',
                'employee_id' => '3',
                'achievement_date' => now(),
            ],
            [
                'achievement_id' => '4',
                'employee_id' => '3',
                'achievement_date' => now(),
            ],
            [
                'achievement_id' => '1',
                'employee_id' => '4',
                'achievement_date' => now(),
            ],

            [
                'achievement_id' => '2',
                'employee_id' => '4',
                'achievement_date' => now(),
            ],
            [
                'achievement_id' => '3',
                'employee_id' => '4',
                'achievement_date' => now(),
            ],
            [
                'achievement_id' => '4',
                'employee_id' => '4',
                'achievement_date' => now(),
            ],
        ];



        foreach ($achievement_employees as $achievement_employee) {
            AchievementEmployee::updateOrCreate($achievement_employee);
        }
    }
}

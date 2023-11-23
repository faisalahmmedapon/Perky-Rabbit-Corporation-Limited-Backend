<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = array(

            ['name'=>'Human Resources'],
            ['name'=>'Information Technology'],
            ['name'=>'Marketing'],
            ['name'=>'Finance'],
            ['name'=>'Sales'],
            ['name'=>'Customer Service'],
            ['name'=>'Research and Development'],
            ['name'=>'Operations'],
            ['name'=>'Legal'],
            ['name'=>'Quality Assurance']

        );

        foreach ($departments as $department){
            Department::updateOrCreate($department);
        }
    }
}

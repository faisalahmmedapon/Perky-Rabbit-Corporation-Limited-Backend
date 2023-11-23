<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $employees = [
            [
                'name' => 'Asif Albar',
                'email' => 'asif.albar@example.com',
                'phone' => '+8801308899799',
                'address' => 'Rajshahi, Dhaka, Bangladesh',
                'department_id' => '1'
            ],
            [
                'name' => 'Sadia Rahman',
                'email' => 'sadia.rahman@example.com',
                'phone' => '+8801709876543',
                'address' => 'Dhaka, Bangladesh',
                'department_id' => '2'
            ],
            [
                'name' => 'Kamal Hossain',
                'email' => 'kamal.hossain@example.com',
                'phone' => '+8801854321098',
                'address' => 'Chittagong, Bangladesh',
                'department_id' => '3'
            ],
            [
                'name' => 'Nadia Akter',
                'email' => 'nadia.akter@example.com',
                'phone' => '+8801556789012',
                'address' => 'Khulna, Bangladesh',
                'department_id' => '4'
            ],
            [
                'name' => 'Rahim Ahmed',
                'email' => 'rahim.ahmed@example.com',
                'phone' => '+8801998765432',
                'address' => 'Sylhet, Bangladesh',
                'department_id' => '5'
            ],
            [
                'name' => 'Farida Khan',
                'email' => 'farida.khan@example.com',
                'phone' => '+8801601234567',
                'address' => 'Barisal, Bangladesh',
                'department_id' => '1'
            ],
            [
                'name' => 'Arif Islam',
                'email' => 'arif.islam@example.com',
                'phone' => '+8801409876543',
                'address' => 'Dhaka, Bangladesh',
                'department_id' => '2'
            ],
            [
                'name' => 'Tasnim Rahman',
                'email' => 'tasnim.rahman@example.com',
                'phone' => '+8801732109876',
                'address' => 'Rajshahi, Bangladesh',
                'department_id' => '3'
            ],
            [
                'name' => 'Imran Khan',
                'email' => 'imran.khan@example.com',
                'phone' => '+8801301234567',
                'address' => 'Dhaka, Bangladesh',
                'department_id' => '4'
            ],
            [
                'name' => 'Shabnam Akter',
                'email' => 'shabnam.akter@example.com',
                'phone' => '+8801876543210',
                'address' => 'Chittagong, Bangladesh',
                'department_id' => '5'
            ],
        ];
        
        foreach ($employees as $employee) {
           Employee::updateOrCreate($employee);
        }
    }
}

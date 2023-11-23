<?php

namespace App\Http\Controllers\Api\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Achievement;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    // public function index()
    // {
    //     $employees = Employee::with(['department', 'achievements'])->get();
    //     return response()->json([
    //         'employees' => $employees,
    //     ]);
    // }


    // public function store(EmployeeRequest $request)
    // {
    //     $employee = new Employee([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'address' => $request->address,
    //         'department_id' => $request->department_id,
    //     ]);

    //     $employee->save();


    //     $achievements = $request->achievements;
    //     foreach ($achievements as $achievement) {
    //         $employee->achievements()->attach([
    //             'achievement_id' => $achievement->achievement_id,
    //             'achievement_date' => $achievement->achievement_date,
    //             'employee_id' => $employee->id,
    //         ]);
    //     }


    //     return response()->json([
    //         'message' => 'Employee created successfully',
    //         'employee' => $employee,
    //     ]);
    // }

    // public function update(Request $request, $id)
    // {
    //     // Find the existing employee
    //     $employee = Employee::findOrFail($id);
    
    //     // Update employee details
    //     $employee->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'address' => $request->address,
    //         'department_id' => $request->department_id,
    //     ]);
    
    //     // Detach existing achievements
    //     $employee->achievements()->detach();
    
    //     // Attach new achievements
    //     $achievements = $request->achievements;
    //     foreach ($achievements as $achievementData) {
    //         $achievement = Achievement::find($achievementData['achievement_id']);
    
    //         if ($achievement) {
    //             $employee->achievements()->attach($achievement->id, [
    //                 'achievement_date' => $achievementData['achievement_date'],
    //             ]);
    //         }
    //     }
    
    //     return response()->json([
    //         'message' => 'Employee updated successfully',
    //         'employee' => $employee,
    //     ]);
    // }





    public function index()
    {
        $employees = Employee::with(['department', 'achievements'])->get();
        return response()->json(['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $employee = new Employee([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'department_id' => $request->department_id,
        ]);

        $employee->save();

        $achievements = $request->achievements;
        $employee->achievements()->attach($achievements);

        return response()->json([
            'message' => 'New Employee Store successfully',
            'employee' => $employee,
        ]);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'department_id' => $request->department_id,
        ]);

        $achievements = $request->achievements;
        $employee->achievements()->sync($achievements);

        return response()->json([
            'message' => 'Employee updated successfully',
            'employee' => $employee,
        ]);
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return response()->json(['message' => 'Employee deleted successfully']);
    }














}

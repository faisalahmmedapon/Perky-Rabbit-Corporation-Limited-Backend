<?php

namespace App\Http\Controllers\Api\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Achievement;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{

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


        $achievements = $request->input('achievements');

        // Assuming that achievements are numeric IDs
        $employee->achievements()->sync($achievements, ['achievement_date' => now()]);

        return response()->json([
            'message' => 'New Employee Store successfully',
            'employee' => $employee,
        ]);
    }

    public function update(Request $request, Employee $employee)
    {
        // Update employee details
        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'department_id' => $request->department_id,
        ]);

        // Update employee achievements
        $achievements = $request->input('achievements');

        // Assuming that achievements are numeric IDs
        $employee->achievements()->sync($achievements, ['achievement_date' => now()]);

        return response()->json([
            'message' => 'Employee updated successfully',
            'employee' => $employee,
        ]);
    }



    public function show($id)
    {
        $employee = Employee::with(['department', 'achievements'])->findOrFail($id);
        return response()->json(['employee' => $employee]);
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return response()->json(['message' => 'Employee deleted successfully']);
    }
    public function departments()
    {
        $departments = Department::all();

        return response()->json(['departments' => $departments]);
    }
    public function achievements()
    {
        $achievements = Achievement::all();

        return response()->json(['achievements' => $achievements]);
    }
}

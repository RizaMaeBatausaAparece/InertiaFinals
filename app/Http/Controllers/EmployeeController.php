<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Department;
use Inertia\Inertia;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return Inertia::render('Employees', [
            'employees' => $employees,
        ]);
    }

    public function create()
    {
        $departments = Department::all();
        return Inertia::render('Employee/Create', [
            'departments' => $departments,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'phone_number' => 'nullable|string|max:20',
            'salary' => 'required|numeric',
            'department_id' => 'nullable|exists:departments,id',
        ]);

        $employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->phone_number = $request->phone_number;
        $employee->salary = $request->salary;
        $employee->department_id = $request->department_id;
        $employee->save();

        return redirect('/employees')->with('success', 'Employee created successfully');
    }

    public function show(Employee $employee)
    {
        return Inertia::render('Employee/View', ['employee' => $employee]);
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'phone_number' => 'nullable|string|max:20',
            'salary' => 'required|numeric',
            'department_id' => 'nullable|exists:departments,id',
        ]);

        $employee->update($validatedData);

        return redirect('/employees');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect('/employees')->with('success', 'Employee deleted successfully');
    }
}


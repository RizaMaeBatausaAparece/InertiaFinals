<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Inertia\Inertia;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return Inertia::render('Departments', [
            'departments' => $departments,
        ]);
    }
}

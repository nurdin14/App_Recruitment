<?php

namespace App\Http\Controllers;

use App\Models\EmployeesModels;
use Illuminate\Http\Request;

class EmployeesControllers extends Controller
{
    public function index() {

        $employees = EmployeesModels::all();
        return view('admin/employee', compact('employees'));
    }
}

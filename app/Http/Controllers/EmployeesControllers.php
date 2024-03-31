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

    public function createEmployee() {
        return view('admin/v_add');
    }

    public function stroreEmployee(Request $request) {
        $data = [
            'id' =>$request->id,
            'name' =>$request->name,
            'email' =>$request->email,
            'telp' =>$request->telp,
            'divisi' =>$request->divisi,
            'position' =>$request->position,
            'address' =>$request->address,
        ];

        EmployeesModels::create($data);
        return redirect()->route('employee')->with('success', "Data Berhasil Ditambahkan!");
    }
}

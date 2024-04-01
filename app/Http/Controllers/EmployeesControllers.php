<?php

namespace App\Http\Controllers;

use App\Models\EmployeesModels;
use App\Models\DivisiModels;
use App\Models\PositionModels;
use Illuminate\Http\Request;

class EmployeesControllers extends Controller
{
    public function index() {

        $data = [
            'divisi' => DivisiModels::all(),
            'position' => PositionModels::all(),
            'employee' => EmployeesModels::all(),
        ];

        return view('admin/employee', compact('data'));
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

    public function fetchEmployee($id) {
        $data = EmployeesModels::find($id);
        return view('admin/v_edit', compact('data'));
    }
    
    public function updateEmployee(Request $request, $id) {
        $data = [
            'id' =>$request->id,
            'name' =>$request->name,
            'email' =>$request->email,
            'telp' =>$request->telp,
            'divisi' =>$request->divisi,
            'position' =>$request->position,
            'address' =>$request->address,
        ];
        
        EmployeesModels::find($id)->update($data);
        return redirect()->route('employee')->with('success', "Data Berhasil Diupdate!");
    }
    
    public function deleteEmployee($id) {
        EmployeesModels::find($id)->delete();
        return redirect()->route('employee')->with('success', "Data Berhasil Dihapus!");
    }
    public function detailEmployee($id) {
        $data = EmployeesModels::find($id);
        return view('admin/v_detail', compact('data'));
    }
}

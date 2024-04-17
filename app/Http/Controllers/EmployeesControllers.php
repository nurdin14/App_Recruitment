<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;
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

    public function exportExcel() {
        return Excel::download(new EmployeeExport, 'employee.xlsx');
    }

    public function createEmployee() {
        $data = [
            'Posisi' => PositionModels::all(),
            'Divisi' => DivisiModels::all(),
        ];

        return view('admin/v_add', compact('data'));
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

        if($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFile = time() . '.' . $foto->getClientOriginalExtension();
            $lokasi = public_path('storage/img');

            $foto->move($lokasi, $namaFile);
            $data['foto'] = $namaFile;
        }

        EmployeesModels::create($data);
        return redirect()->route('employee')->with('success', "Data Berhasil Ditambahkan!");
    }

    public function fetchEmployee($id) {
        $data = [
            'Posisi' => PositionModels::all(),
            'Divisi' => DivisiModels::all(),
            'Employee' => EmployeesModels::find($id),
        ];

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
        
        if($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFile = time() . '.' . $foto->getClientOriginalExtension();
            $lokasi = public_path('storage/img');

            $foto->move($lokasi, $namaFile);
            $data['foto'] = $namaFile;
        }
        
        if (!empty($request->foto_old)) {
            $oldFile = public_path($request->foto_old);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
        }

        EmployeesModels::find($id)->update($data);
        return redirect()->route('employee')->with('success', "Data Berhasil Diupdate!");
    }
    
    public function deleteEmployee($id) {
        $hapus = EmployeesModels::find($id);
        if (!empty($hapus->foto)) {
            $gambarPath = public_path('storage/img/'. $hapus->foto);
            unlink($gambarPath);
        }

        $hapus->delete();
        return redirect()->route('employee')->with('success', "Data Berhasil Dihapus!");
    }
    public function detailEmployee($id) {
        $data = [
            'Posisi' => PositionModels::all(),
            'Divisi' => DivisiModels::all(),
            'Employee' => EmployeesModels::find($id),
        ];
        return view('admin/v_detail', compact('data'));
    }
}

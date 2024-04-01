<?php

namespace App\Http\Controllers;

use App\Models\DivisiModels;
use Illuminate\Http\Request;

class DivisiControllers extends Controller
{
    public function index() {
        $data = DivisiModels::all();
        return view('admin/divisi/v_tampil', compact('data'));
    }

    public function createDivisi() {
        return view('admin/divisi/v_add');
    }

    public function storeDivisi(Request $request) {
        $data = [
            'id' => $request->id,
            'kode' => $request->kode,
            'divisi' => $request->divisi,
            'desc' => $request->desc,
        ];

        DivisiModels::create($data);
        return redirect()->route('divisi')->with('success', 'data berhasil ditambahkan!');
    }

    public function fetchDivisi($id) {
        $data = DivisiModels::find($id);
        return view('admin/divisi/v_edit', compact('data'));
    }

    public function updateDivisi(Request $request, $id) {
        $data = [
            'id' => $request->id,
            'kode' => $request->kode,
            'divisi' => $request->divisi,
            'desc' => $request->desc,
        ];

        DivisiModels::find($id)->update($data);
        return redirect()->route('divisi')->with('success', 'data berhasil diubah!');
    }

    public function deleteDivisi($id) {
        DivisiModels::find($id)->delete();
        return redirect()->route('divisi')->with('success', 'data berhasil dihapus!');
    }

    public function detailDivisi($id) {
        $data = DivisiModels::find($id);
        return view('admin/divisi/v_detail', compact('data'));
    }
}

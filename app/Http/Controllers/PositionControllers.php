<?php

namespace App\Http\Controllers;

use App\Models\PositionModels;
use Illuminate\Http\Request;

class PositionControllers extends Controller
{
    public function index() {
        $data = PositionModels::all();
        return view('admin/position/v_tampil', compact('data'));
    }

    public function createPosition() {
        return view('admin/position/v_add');
    }

    public function storePosition(Request $request) {
        $data = [
            'id' => $request->id,
            'kode' => $request->kode,
            'position' => $request->position,
            'desc' => $request->desc,
        ];

        PositionModels::create($data);
        return redirect()->route('position')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function fetchPosition($id) {
        $data = PositionModels::find($id);
        return view('admin/position/v_edit', compact('data'));
    }
    
    public function updatePosition(Request $request, $id) {
        $data = [
            'id' => $request->id,
            'kode' => $request->kode,
            'position' => $request->position,
            'desc' => $request->desc,
        ];
        
        PositionModels::find($id)->update($data);
        return redirect()->route('position')->with('success', 'Data Berhasil Diubah!');
    }

    public function detailPosition($id) {
        $data = PositionModels::find($id);
        return view('admin/position/v_detail', compact('data'));
    }

    public function deletePosition($id) {
        PositionModels::find($id)->delete();
        return redirect()->route('position')->with('success', 'Data Berhasil Dihapus!');
    }
}

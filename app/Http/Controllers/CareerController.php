<?php

namespace App\Http\Controllers;

use App\Models\CareerModels;
use App\Models\PositionModels;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index() {
        $data = CareerModels::all();
        return view('admin/career/v_tampil', compact('data'));
    }

    public function createCareer() {
        $data = PositionModels::all();
        return view('admin/career/v_add', compact('data'));
    }

    public function storeCareer(Request $request) {

        $desc = strip_tags($request->desc);
        $preq = strip_tags($request->preq);
        $data = [
            'id' => $request->id,
            'position' => $request->position,
            'desc' => $desc,
            'preq' => $preq,
        ];

        if($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFile = time() . '.' . $foto->getClientOriginalExtension();
            $lokasi = public_path('storage/img');

            $foto->move($lokasi, $namaFile);
            $data['foto'] = $namaFile;
        }

        CareerModels::create($data);
        return redirect()->route('career')->with('success', 'data berhasil ditambahkan');
    }

    public function fetchCareer($id) {
        $data = [
            'edit' => CareerModels::find($id),
            'position' => PositionModels::all(),
        ];

        return view('admin/career/v_edit', compact('data'));
    }

    public function updateCareer(Request $request, $id) {
        $desc = strip_tags($request->desc);
        $preq = strip_tags($request->preq);
        $data = [
            'id' => $request->id,
            'position' => $request->position,
            'desc' => $desc,
            'preq' => $preq,
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

        CareerModels::find($id)->update($data);
        return redirect()->route('career')->with('success', 'data berhasil diubah');
    }

    public function deleteCareer($id) {
        $hapus = CareerModels::find($id);
        if (!empty($hapus->foto)) {
            $gambarPath = public_path('storage/img/'. $hapus->foto);
            unlink($gambarPath);
        }

        $hapus->delete();
        return redirect()->route('career')->with('success', 'data berhasil dihapus');
    }

    public function detailCareer($id) {
        $data = CareerModels::find($id);
        return view('admin/career/v_detail', compact('data'));
    }
}

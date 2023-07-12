<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;


class PasienController extends Controller
{
    public function index()
    {
        $data['pasien'] = Pasien::all();
        return view('admin.pasien.index', $data);
    }

    public function create()
    {
        return view('admin.pasien.create');
    }

    public function store(Request $request)
    {
        $data = Pasien::create($request->all());
        if ($data) {
            return redirect('admin/pasien')->with('success', 'Berhasil Menambah Data !');
        }
        return redirect('admin/pasien')->with('success', 'Gagal Menambah Data !!!');
    }

    public function edit($id)
    {
        $data = Pasien::find($id);
        return view('admin.pasien.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $d = Pasien::find($id);
        if ($d == null) {
            return redirect('admin/pasien')->with('success', 'Data Tidak Ditemukan !!');
        }
        $req = $request->all();

        $data = Pasien::find($id)->update($req);
        if ($data) {
            return redirect('admin/pasien')->with('success', 'Pasien Berhasil di Edit !');
        }
        return redirect('admin/pasien')->with('success', 'Gagal Edit Pasien !!!');
    }

    public function delete($id)
    {
        $data = Pasien::find($id);
        if ($data == null) {
            return redirect('admin/pasien')->with('success', 'Data Tidak Ditemukan !!');
        }
        $delete = $data->delete();
        if ($delete) {
            return redirect('admin/pasien')->with('success', 'Pasien Berhasil di Hapus !');
        }
        return redirect('admin/pasien')->with('success', 'Gagal Hapus Pasien !!!');
    }
}
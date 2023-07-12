<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['pegawai'] = Pegawai::all();
        return view('admin.pegawai.index', $data);
    }

    public function create()
    {
        return view('admin.pegawai.create');
    }

    public function store(Request $request)
    {
        $data = Pegawai::create($request->all());
        if ($data) {
            return redirect('admin/pegawai')->with('success', 'Berhasil Menambah Data !');
        }
        return redirect('admin/pegawai')->with('success', 'Gagal Menambah Data !!!');
    }

    public function edit($id)
    {
        $data = Pegawai::find($id);
        return view('admin.pegawai.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $d = Pegawai::find($id);
        if ($d == null) {
            return redirect('admin/pegawai')->with('success', 'Data Tidak Ditemukan !!');
        }
        $req = $request->all();

        $data = Pegawai::find($id)->update($req);
        if ($data) {
            return redirect('admin/pegawai')->with('success', 'Pegawai Berhasil di Edit !');
        }
        return redirect('admin/pegawai')->with('success', 'Gagal Edit Pegawai !!!');
    }

    public function delete($id)
    {
        $data = Pegawai::find($id);
        if ($data == null) {
            return redirect('admin/pegawai')->with('success', 'Data Tidak Ditemukan !!');
        }
        $delete = $data->delete();
        if ($delete) {
            return redirect('admin/pegawai')->with('success', 'Pegawai Berhasil di Hapus !');
        }
        return redirect('admin/pegawai')->with('success', 'Gagal Hapus Pegawai !!!');
    }
}

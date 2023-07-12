<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ObatController extends Controller
{
    public function index()
    {
        $data['obat'] = Obat::all();
        return view('admin.obat.index', $data);
    }

    public function create()
    {
        return view('admin.obat.create');
    }

    public function store(Request $request)
    {
        $data = Obat::create($request->all());
        if ($data) {
            return redirect('admin/obat')->with('success', 'Berhasil Menambah Data !');
        }
        return redirect('admin/obat')->with('success', 'Gagal Menambah Data !!!');
    }

    public function edit($id)
    {
        $data = Obat::find($id);
        return view('admin.obat.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $d = Obat::find($id);
        if ($d == null) {
            return redirect('admin/obat')->with('success', 'Data Tidak Ditemukan !!');
        }
        $req = $request->all();

        $data = Obat::find($id)->update($req);
        if ($data) {
            return redirect('admin/obat')->with('success', 'Obat Berhasil di Edit !');
        }
        return redirect('admin/obat')->with('success', 'Gagal Edit Obat !!!');
    }

    public function delete($id)
    {
        $data = Obat::find($id);
        if ($data == null) {
            return redirect('admin/obat')->with('success', 'Data Tidak Ditemukan !!');
        }
        $delete = $data->delete();
        if ($delete) {
            return redirect('admin/obat')->with('success', 'Obat Berhasil di Hapus !');
        }
        return redirect('admin/obat')->with('success', 'Gagal Hapus Obat !!!');
    }
}

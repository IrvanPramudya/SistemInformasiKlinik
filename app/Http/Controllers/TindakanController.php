<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tindakan;

class TindakanController extends Controller
{
    public function index()
    {
        $data['tindakan'] = Tindakan::all();
        return view('admin.tindakan.index', $data);
    }

    public function create()
    {
        return view('admin.tindakan.create');
    }

    public function store(Request $request)
    {
        $data = Tindakan::create($request->all());
        if ($data) {
            return redirect('admin/tindakan')->with('success', 'Berhasil Menambah Data !');
        }
        return redirect('admin/tindakan')->with('success', 'Gagal Menambah Data !!!');
    }

    public function edit($id)
    {
        $data = Tindakan::find($id);
        return view('admin.tindakan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $d = Tindakan::find($id);
        if ($d == null) {
            return redirect('admin/tindakan')->with('success', 'Data Tidak Ditemukan !!');
        }
        $req = $request->all();

        $data = Tindakan::find($id)->update($req);
        if ($data) {
            return redirect('admin/tindakan')->with('success', 'Tindakan Berhasil di Edit !');
        }
        return redirect('admin/tindakan')->with('success', 'Gagal Edit Tindakan !!!');
    }

    public function delete($id)
    {
        $data = Tindakan::find($id);
        if ($data == null) {
            return redirect('admin/tindakan')->with('success', 'Data Tidak Ditemukan !!');
        }
        $delete = $data->delete();
        if ($delete) {
            return redirect('admin/tindakan')->with('success', 'Tindakan Berhasil di Hapus !');
        }
        return redirect('admin/tindakan')->with('success', 'Gagal Hapus Tindakan !!!');
    }
}

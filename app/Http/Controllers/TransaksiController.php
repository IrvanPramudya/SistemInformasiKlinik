<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;


class TransaksiController extends Controller
{
    public function index()
    {
        $data['transaksi'] = Transaksi::all();
        return view('admin.transaksi.index', $data);
    }

    public function create()
    {
        return view('admin.transaksi.create');
    }

    public function store(Request $request)
    {
        $data = Transaksi::create($request->all());
        if ($data) {
            return redirect('admin/transaksi')->with('success', 'Berhasil Menambah Data !');
        }
        return redirect('admin/transaksi')->with('success', 'Gagal Menambah Data !!!');
    }

    public function edit($id)
    {
        $data = Transaksi::find($id);
        return view('admin.transaksi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $d = Transaksi::find($id);
        if ($d == null) {
            return redirect('admin/transaksi')->with('success', 'Data Tidak Ditemukan !!');
        }
        $req = $request->all();

        $data = Transaksi::find($id)->update($req);
        if ($data) {
            return redirect('admin/transaksi')->with('success', 'Transaksi Berhasil di Edit !');
        }
        return redirect('admin/transaksi')->with('success', 'Gagal Edit Transaksi !!!');
    }

    public function delete($id)
    {
        $data = Transaksi::find($id);
        if ($data == null) {
            return redirect('admin/transaksi')->with('success', 'Data Tidak Ditemukan !!');
        }
        $delete = $data->delete();
        if ($delete) {
            return redirect('admin/transaksi')->with('success', 'Transaksi Berhasil di Hapus !');
        }
        return redirect('admin/transaksi')->with('success', 'Gagal Hapus Transaksi !!!');
    }
}

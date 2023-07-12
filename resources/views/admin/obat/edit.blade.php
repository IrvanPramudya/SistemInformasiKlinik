@extends('admin.app')
@section('content')
<h3>Edit Obat</h3>
<hr>
<div class="col-lg-12">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>    
    @endif
    <div class="center">
    <form action="{{ url('admin/obat/edit/'. $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container justify-content-center">

        <input type="hidden" name="transaksi_id" class="form-control">

        <label for="kode_obat">Kode Obat</label>
        <input type="text" name="kode_obat" value="{{ $data->kode_obat }}" class="form-control">

        <label for="nama">Nama</label>
        <input type="text" name="nama" value="{{ $data->nama }}" class="form-control">

        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" value="{{ $data->jumlah }}" class="form-control">
        
        <label for="harga">Harga</label>
        <input type="number" name="harga" value="{{ $data->harga }}" class="form-control">

        <label for="tanggal_pesan">Tanggal Pesan</label>
        <input type="date" name="tanggal_pesan" value="{{ $data->tanggal_pesan }}" class="form-control">
        
        <label for="kadaluwarsa">Kadaluwarsa</label>
        <input type="date" name="kadaluwarsa" value="{{ $data->kadaluwarsa }}" class="form-control">
        
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" value="{{ $data->deskripsi }}" class="form-control">
        
        <br>
        <input type="submit" name="submit" class="btn btn-md btn-primary" value="Edt Data">
        <a href="{{ url('admin/obat') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left">
            </i>Kembali</a>
    </form>
    </div>
</div>
@endsection
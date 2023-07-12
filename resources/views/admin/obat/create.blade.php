@extends('admin.app')
@section('content')
<h3>Tambah Obat</h3>
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
    <form action="{{ url('admin/obat/create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container justify-content-center">

        <input type="hidden" name="transaksi_id" class="form-control">

        <label for="kode_obat">Kode Obat</label>
        <input type="text" name="kode_obat" class="form-control">

        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control">

        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" class="form-control">
        
        <label for="harga">Harga</label>
        <input type="number" name="harga" class="form-control">

        <label for="tanggal_pesan">Tanggal Pesan</label>
        <input type="date" name="tanggal_pesan" class="form-control">
        
        <label for="kadaluwarsa">Kadaluwarsa</label>
        <input type="date" name="kadaluwarsa" class="form-control">
        
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control">
        
        <br>
        <input type="submit" name="submit" class="btn btn-md btn-primary" value="Tambah Data">
        <a href="{{ url('admin/obat') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left">
            </i>Kembali</a>
    </form>
    </div>
</div>
@endsection
@extends('admin.app')
@section('content')
<h3>Tambah Pegawai</h3>
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
    <form action="{{ url('admin/pegawai/create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container justify-content-center">

        <input type="hidden" name="id" class="form-control">

        <label for="kode_pegawai">Kode Pegawai</label>
        <input type="text" name="kode_pegawai" class="form-control">

        <label for="nama_pegawai">Nama</label>
        <input type="text" name="nama_pegawai" class="form-control">

        <label for="no_hp">No Hp</label>
        <input type="number" name="no_hp" class="form-control">

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control">
        
        <label for="alamat">alamat</label>
        <input type="text" name="alamat" class="form-control">
        
        <label for="posisi">Posisi</label>
        <select name="posisi" id="posisi" class="form-control">
            <option value="Dokter">Dokter</option>
            <option value="Perawat">Perawat</option>
        </select>
        <br>
        <input type="submit" name="submit" class="btn btn-md btn-primary" value="Tambah Data">
        <a href="{{ url('admin/pegawai') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left">
            </i>Kembali</a>
    </form>
    </div>
</div>
@endsection
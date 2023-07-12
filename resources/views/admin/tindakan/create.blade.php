@extends('admin.app')
@section('content')
<h3>Tambah Tindakan</h3>
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
    <form action="{{ url('admin/tindakan/create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container justify-content-center">

        <input type="hidden" name="id" class="form-control">

        <label for="kode_tindakan">Kode Tindakan</label>
        <input type="text" name="kode_tindakan" class="form-control">

        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control">

        <label for="fee_dokter">Fee Dokter</label>
        <input type="number" name="fee_dokter" class="form-control">
        
        <label for="fee_karyawan">Fee Karyawan</label>
        <input type="number" name="fee_karyawan" class="form-control">
        
        <label for="harga">Harga</label>
        <input type="number" name="harga" class="form-control">
        
        <label for="desc">Deskripsi</label>
        <input type="text" name="desc" class="form-control">
        
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori" class="form-control">
            <option value="Umum">Umum</option>
            <option value="Bersalin">Bersalin</option>
        </select>
        <br>
        <input type="submit" name="submit" class="btn btn-md btn-primary" value="Tambah Data">
        <a href="{{ url('admin/tindakan') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left">
            </i>Kembali</a>
    </form>
    </div>
</div>
@endsection
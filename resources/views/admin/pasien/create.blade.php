@extends('admin.app')
@section('content')
<h3>Tambah Pasien</h3>
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
    <form action="{{ url('admin/pasien/create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">

        <input type="hidden" name="id" class="form-control">
        <div class="row">
            <div class="col-md-6">
        <div class="form-group">
            <label for="kode_pasien">Kode Pasien</label>
            <input type="text" name="kode_pasien" class="form-control">
    
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control">
            
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control">
            
            <label for="umur">Umur</label>
            <input type="number" name="umur" class="form-control">

            <label for="jenis_kel">Jenis Kelamin</label>
            <select name="jenis_kel" id="jenis_kel" class="form-control">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            
            <label for="nohp">No HP</label>
            <input type="number" name="nohp" class="form-control">
        </div>
    </div>
<div class="col-md-6">
        <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
        <input type="text" name="kelurahan" class="form-control">

        <label for="kota">Kota</label>
        <input type="text" name="kota" class="form-control">
        
        <label for="kode_pos">Kode Pos</label>
        <input type="number" name="kode_pos" class="form-control">
        
        </div>
        <br>
        <input type="submit" name="submit" class="btn btn-md btn-primary" value="Tambah Data">
        <a href="{{ url('admin/transaksi') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left">
            </i>Kembali</a>
    </div>
        
    </form>
</div>
    </div>
</div>
@endsection
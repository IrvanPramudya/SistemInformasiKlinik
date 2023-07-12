@extends('admin.app')
@section('content')
<h3>Edit Tindakan</h3>
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
    <form action="{{ url('admin/tindakan/edit/'. $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container justify-content-center">


        <label for="kode_tindakan">Kode Tindakan</label>
        <input type="text" name="kode_tindakan" value="{{ $data->kode_tindakan }}" class="form-control">

        <label for="nama">Nama</label>
        <input type="text" name="nama" value="{{ $data->nama }}" class="form-control">

        <label for="fee_dokter">Fee Dokter</label>
        <input type="number" name="fee_dokter" value="{{ $data->fee_dokter }}" class="form-control">

        <label for="fee_karyawan">Fee Karyawan</label>
        <input type="number" name="fee_karyawan" value="{{ $data->fee_karyawan }}" class="form-control">
        
        <label for="harga">Harga</label>
        <input type="number" name="harga" value="{{ $data->harga }}" class="form-control">
        
        <label for="desc">Deskripsi</label>
        <input type="text" name="desc" value="{{ $data->desc }}" class="form-control">
        
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori" class="form-control">
            <option value="Umum" {{ ("Umum" == $data->kategori) ? 'selected' : '' }}>Umum</option>
            <option value="Bersalin"{{ ("Bersalin" == $data->kategori) ? 'selected' : '' }}>Bersalin</option>
        </select>
        
        <br>
        <input type="submit" name="submit" class="btn btn-md btn-primary" value="Edt Data">
        <a href="{{ url('admin/tindakan') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left">
            </i>Kembali</a>
    </form>
    </div>
</div>
@endsection
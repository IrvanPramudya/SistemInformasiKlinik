@extends('admin.app')
@section('content')
<h3>Edit Transaksi</h3>
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
    <form action="{{ url('admin/transaksi/edit/'. $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container justify-content-center">

        <input type="hidden" name="id" class="form-control">
        {{-- <label for="pasien_id">Pasien ID</label>
        <input type="hidden" name="pasien_id" value="{{ $data->pasien_id }}" class="form-control">
        
        <label for="user_id">User ID</label>
        <input type="hidden" name="user_id" value="{{ $data->user_id }}" class="form-control">
        
        <label for="diagnosa_id">Diagnosa ID</label>
        <input type="hidden" name="diagnosa_id" value="{{ $data->diagnosa_id }}" class="form-control"> --}}

        <label for="kode_trankaksi">Kode Transaksi</label>
        <input type="text" name="kode_trankaksi" value="{{ $data->kode_transaksi }}" class="form-control">

        <label for="jenis">Jenis</label>
        <input type="text" name="jenis" value="{{ $data->jenis }}" class="form-control">
        
        <label for="tambahan_diagnosa">Tambahan Diagnosa</label>
        <input type="text" name="tambahan_diagnosa" value="{{ $data->tambahan_diagnosa }}" class="form-control">
        
        <label for="dp">DP</label>
        <input type="number" name="dp" value="{{ $data->dp }}" class="form-control">
        
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="Lunas" {{ ("Lunas" == $data->status) ? 'selected' : '' }}>Lunas</option>
            <option value="Belum Lunas" {{ ("Belum Lunas" == $data->status) ? 'selected' : '' }}>Belum Lunas</option>
        </select>
        <br>
        <input type="submit" name="submit" class="btn btn-md btn-primary" value="Tambah Data">
        <a href="{{ url('admin/transaksi') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left">
            </i>Kembali</a>
    </form>
    </div>
</div>
@endsection
@extends('admin.app')
@section('content')

<h3>Obat</h3>
<hr>
    @if(Session::has('status'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('status') }}
    </div>
    @endif
<a href="{{ url('admin/obat/create') }}" class="btn btn-md btn-primary mb-3">
<i class="fas fa-plus"></i></a>

<table class="table table-bordered table-responsive">
    <thead class="bg-primary text-light">
        <tr>
            <th>Kode Obat</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Tanggal Pesan</th>
            <th>Kadaluwarsa</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach($obat as $obt)
    <tr>
        <td>{{ $obt->kode_obat }}</td>
        <td>{{ $obt->nama }}</td>
        <td>{{ $obt->jumlah }}</td>
        <td>Rp. {{ number_format($obt->harga) }}</td>
        <td>{{ $obt->tanggal_pesan }}</td>
        <td>{{ $obt->kadaluwarsa }}</td>
        <td>{{ $obt->deskripsi }}</td>
        <td>
            <a href="{{ url('admin/obat/edit/'.$obt->id) }}" class="btn btn-primary btn-md"><i class="fas fa-edit">
            </i></a>
            <a href="{{ url('admin/obat/delete/'.$obt->id) }}" class="btn btn-warning btn-md"><i class=" fas fa-trash">
            </i></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
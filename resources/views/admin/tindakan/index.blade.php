@extends('admin.app')
@section('content')

<h3>Tindakan</h3>
<hr>
    @if(Session::has('status'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('status') }}
    </div>
    @endif
<a href="{{ url('admin/tindakan/create') }}" class="btn btn-md btn-primary mb-3">
<i class="fas fa-plus"></i></a>

<table class="table table-bordered table-responsive">
    <thead class="bg-primary text-light">
        <tr>
            <th>Kode Tindakan</th>
            <th>Nama</th>
            <th>Fee Dokter</th>
            <th>Fee Karyawan</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach($tindakan as $tdk)
    <tr>
        <td>{{ $tdk->kode_tindakan }}</td>
        <td>{{ $tdk->nama }}</td>
        <td>{{ $tdk->fee_dokter }}</td>
        <td>{{ $tdk->fee_karyawan }}</td>
        <td>{{ $tdk->harga }}</td>
        <td>{{ $tdk->desc }}</td>
        <td>{{ $tdk->kategori }}</td>
        <td>
            <a href="{{ url('admin/tindakan/edit/'.$tdk->id) }}" class="btn btn-primary btn-md"><i class="fas fa-edit">
            </i></a>
            <a href="{{ url('admin/tindakan/delete/'.$tdk->id) }}" class="btn btn-warning btn-md"><i class=" fas fa-trash">
            </i></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
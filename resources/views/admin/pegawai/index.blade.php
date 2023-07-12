@extends('admin.app')
@section('content')

<h3>Pegawai</h3>
<hr>
    @if(Session::has('status'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('status') }}
    </div>
    @endif
<a href="{{ url('admin/pegawai/create') }}" class="btn btn-md btn-primary mb-3">
<i class="fas fa-plus"></i></a>

<table class="table table-bordered table-responsive">
    <thead class="bg-primary text-light">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama</th>
            <th>No Hp</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Posisi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach($pegawai as $pgw)
    <tr>
        <td>{{ $pgw->kode_pegawai }}</td>
        <td>{{ $pgw->nama_pegawai }}</td>
        <td>{{ $pgw->no_hp }}</td>
        <td>{{ $pgw->tanggal_lahir }}</td>
        <td>{{ $pgw->alamat }}</td>
        <td>{{ $pgw->posisi }}</td>
        <td>
            <a href="{{ url('admin/pegawai/edit/'.$pgw->id) }}" class="btn btn-primary btn-md"><i class="fas fa-edit">
            </i></a>
            <a href="{{ url('admin/pegawai/delete/'.$pgw->id) }}" class="btn btn-warning btn-md"><i class=" fas fa-trash">
            </i></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
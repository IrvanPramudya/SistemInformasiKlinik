@extends('admin.app')
@section('content')

<h3>Pasien</h3>
<hr>
    @if(Session::has('status'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('status') }}
    </div>
    @endif
<a href="{{ url('admin/pasien/create') }}" class="btn btn-md btn-primary mb-3">
    <i class="fas fa-plus"></i>
</a>
<table class="table table-bordered table-responsive">
    <thead class="bg-primary text-light">
        <tr>
            <th>Kode Pasien</th>
            <th>Nama</th>
            <th>No Hp</th>
            <th>Umur</th>
            <th>P/W</th>
            <th>Tanggal Lahir</th>
            <th>Kelurahan</th>
            <th>Kota</th>
            <th>Kode Pos</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach($pasien as $pas)
    <tr>
        <td>{{ $pas->kode_pasien }}</td>
        <td>{{ $pas->nama }}</td>
        <td>{{ $pas->nohp }}</td>
        <td>{{ $pas->umur }}</td>
        <td>{{ $pas->jenis_kel }}</td>
        <td>{{ $pas->tgl_lahir }}</td>\
        <td>{{ $pas->kelurahan }}</td>
        <td>{{ $pas->kota }}</td>
        <td>{{ $pas->kode_pos }}</td>
        <td>
            <a href="{{ url('admin/pasien/edit/'.$pas->id) }}" class="btn btn-primary btn-md"><i class="fas fa-edit">
            </i></a>
            <a href="{{ url('admin/pasien/delete/'.$pas->id) }}" class="btn btn-warning btn-md"><i class=" fas fa-trash">
            </i></a>
            <a href="{{ url('admin/pasien/transaksi/'.$pas->id) }}" class="btn btn-warning btn-md">
                <i class="fa-solid fa-money-bill"></i></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
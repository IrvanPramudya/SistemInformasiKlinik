@extends('admin.app')
@section('content')

<h3>Transaksi</h3>
<hr>
    @if(Session::has('status'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('status') }}
    </div>
    @endif
<a href="{{ url('admin/transaksi/create') }}" class="btn btn-md btn-primary mb-3">
<i class="fas fa-plus"></i></a>

<table class="table table-bordered table-responsive">
    <thead class="bg-primary text-light">
        <tr>
            <th>Kode Transaksi</th>
            <th>Jenis</th>
            <th>Status</th>
            <th>Tambahan Diagnosa</th>
            <th>DP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    @foreach($transaksi as $trs)
    <tr>
        <td>{{ $trs->kode_transaksi }}</td>
        <td>{{ $trs->jenis }}</td>
        <td>{{ $trs->status }}</td>
        <td>{{ $trs->tambahan_diagnosa }}</td>
        <td>Rp. {{ number_format($trs->dp) }}</td>
        <td>
            <a href="{{ url('admin/transaksi/edit/'.$trs->id) }}" class="btn btn-primary btn-md"><i class="fas fa-edit">
            </i></a>
            <a href="{{ url('admin/transaksi/delete/'.$trs->id) }}" class="btn btn-warning btn-md"><i class=" fas fa-trash">
            </i></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
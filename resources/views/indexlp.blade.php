@extends('master')

@section('title','Daftar Lampu')

@section('content')
<h3>Daftar Lampu</h3>
<a href="/lampu/tambahlp" class="btn btn-primary">+ Tambah Lampu</a>
<br/>
<br/>
<table class="table table-striped table-hover">
    <tr>
        <th>Kode Lampu</th>
        <th>Merk Lampu</th>
        <th>Stock Lampu</th>
        <th>Tersedia </th>
        <th>Action</th>
    </tr>
    @foreach($lampu as $s)
    <tr>
        <td>{{ $s->kodelampu }}</td>
        <td>{{ $s->merklampu }}</td>
        <td>{{ $s->stocklampu }}</td>
        @if ($s->tersedia == "Y")
        <td>Tersedia</td>
        @else
        <td>Tidak Tersedia</td>
        @endif
        <td>
            <a href="/lampu/editlp/{{ $s->kodelampu }}" class="btn btn-warning">Edit</a>
            |
            <a href="/lampu/hapus/{{ $s->kodelampu }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection

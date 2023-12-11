@extends('master')

@section('Title', 'Kirim Kategori')

@section('content')
<br>

<div class="container mt-4">
    <h3>Anda telah memilih Kategori dengan Kode:
        {{ $selectedKategoriId }}
    </h3>
</div>

<a class="btn btn-success"href="/kategori">OK</a>
@endsection

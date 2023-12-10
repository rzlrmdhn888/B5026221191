@extends('master')

@section('title', 'Keranjang Belanja')

@section('content')
<h3>Keranjang Belanja</h3>
<a href="/keranjangbelanja/tambahkb" class="btn btn-primary"> + Tambah Barang Baru</a>
<br/>
<br/>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Barang</th>
            <th>Harga Barang</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $kb)
            <tr>
                <td>{{ $kb->ID }}</td>
                <td>{{ $kb->KodeBarang }}</td>
                <td>{{ $kb->Jumlah }}</td>
                <td>{{ number_format($kb->Harga, 2) }}</td>
                <td>{{ number_format($kb->Jumlah * $kb->Harga, 2) }}
                <td>
                    <a href="/keranjangbelanja/hapus/{{ $kb->ID}}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach

    </table>

@endsection

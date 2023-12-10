@extends('master')
@section('title','Tambah Keranjang Belanja')

@section('content')
	<h3>Tambah Keranjang Belanja</h3>
    <br>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right">Kode Barang:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="KodeBarang" placeholder="Masukkan kode barang">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Jumlah:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="Jumlah" placeholder="Masukkan jumlah barang">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Harga:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="Harga" placeholder="Masukkan harga barang">
            </div>
          </div>
          <div class="form-group row">
            <div class="control-label col-sm-2 align-right" ></div>
            <div class="col-sm-10">
                <input class="btn btn-success" type="submit" value="Beli">
                |
                <a class="btn btn-warning" href="/keranjangbelanja"> Kembali</a>
            </div>
          </div>
	</form>

@endsection

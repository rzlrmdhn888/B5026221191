@extends('master')

@section('title', 'Data Pegawai')

@section('content')

<div class="container">
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-sm-1 control-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 control-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-1 control-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="umur" name="umur">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-1 control-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-1">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </div>
    </form>
</div>

@endsection

@extends('master')
@section('title','Tambah Lampu')

@section('content')
	<h3>Tambah Lampu</h3>
    <br>

	<form action="/lampu/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right">Merk Lampu:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="merklampu" placeholder="Masukkan Merk lampu">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Stock Lampu:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="stocklampu" placeholder="Masukkan Stock lampu">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Tersedia:</label>
            <div class="col-sm-10">
                <div class="form-check"><input type="radio" class="form-check-input" name="tersedia" style="text-transform:uppercase" value="Y">Tersedia</div>
                <div class="form-check"><input type="radio" class="form-check form-check-input" name="tersedia" style="text-transform:uppercase" value="T"> Tidak Tersedia</div>
            </div>
          </div>
          <div class="form-group row">
            <div class="control-label col-sm-2 align-right" ></div>
            <div class="col-sm-10">
                <input class="btn btn-success" type="submit" value="Simpan">
                |
                <a class="btn btn-warning" href="/lampu"> Kembali</a>
            </div>
          </div>
	</form>
@endsection

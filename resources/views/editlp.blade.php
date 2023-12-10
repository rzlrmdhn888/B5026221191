@extends('master')
@section('title','Edit Lampu')

@section('content')
	<h3>Edit Lampu</h3>

	@foreach($lampu as $s)
	<form action="/lampu/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodelampu" value="{{ $s->kodelampu }}"> <br/>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right">Merk Lampu:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="merklampu" value="{{ $s->merklampu }}" placeholder="Masukkan Merk lampu">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Stock Lampu:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="stocklampu" value="{{ $s->stocklampu }}" placeholder="Masukkan Stock lampu">
            </div>
          </div>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-right" >Tersedia:</label>
            <div class="col-sm-10">
                @if ($s->tersedia == "Y")
                <div class="form-check"><input type="radio" class="form-check-input" name="tersedia" style="text-transform:uppercase" value="Y" checked>Tersedia</div>
                <div class="form-check"><input type="radio" class="form-check form-check-input" name="tersedia" style="text-transform:uppercase" value="T"> Tidak Tersedia</div>
                @else
                <div class="form-check"><input type="radio" class="form-check-input" name="tersedia" style="text-transform:uppercase" value="Y">Tersedia</div>
                <div class="form-check"><input type="radio" class="form-check form-check-input" name="tersedia" style="text-transform:uppercase" value="T" checked> Tidak Tersedia</div>
                @endif
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
	@endforeach

@endsection

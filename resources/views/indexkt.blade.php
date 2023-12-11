@extends('master')
@section('title','Pilih Kategori')

@section('content')
	<h3>Pilih Kategori</h3>
    <br>

    <form action="/kategori/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-10"  >
                <select class="form-control" name="Nama">
                    <option value="store">Elektronik</option>
                    <option value="store">Rumah Tangga</option>
                    <option value="store">Komputer</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </form>


@endsection

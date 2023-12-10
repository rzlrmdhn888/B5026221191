@extends('master')

@section('content')

	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>
    @foreach ($pegawai as $p)
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="row">
            <div class="col-sm-4 border">
            </div>

            <div class="col-sm-8">
                <div class = "form-group row">
                    <label for = "nama" class = "col-sm-2 control-label">Nama</label>
                    <div class = "col-sm-10">
                       <input type = "text" readonly class = "form-control" id = "nama" value="{{ $p->pegawai_nama }}">
                    </div>
                </div>

                <div class = "form-group row">
                    <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
                    <div class = "col-sm-10">
                       <input type = "text" readonly class = "form-control" id = "jabatan" value="{{ $p->pegawai_jabatan }}">
                    </div>
                </div>

                <div class = "form-group row">
                   <label for = "umur" class = "col-sm-2 control-label">Umur</label>
                   <div class = "col-sm-10">
                      <input type = "text" readonly class = "form-control" id = "umur" value="{{ $p->pegawai_umur }}">
                   </div>
                </div>

                <div class = "form-group row">
                    <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
                    <div class = "col-sm-10">
                       <input type = "text" readonly class = "form-control" id = "alamat" value="{{ $p->pegawai_alamat }}">
                    </div>
                </div>

                <div class = "col-sm-8 align-items-center mx-auto">
                       <a href='/pegawai' class = "btn btn-primary btn-success">OK</a>
                </div>
            </div>
        </div>
	</form>
    @endforeach

@endsection

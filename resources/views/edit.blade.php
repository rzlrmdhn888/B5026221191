@extends('master')

@section('content')

    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h3>Edit Pegawai</h3>

    <a href="/pegawai" class="btn btn-primary"> Kembali</a>

    <br/>
    <br/>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="form-group row">
            <label for="nama" class="col-sm-1 control-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 control-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-1 control-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-1 control-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-1">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
    </form>
    @endforeach
</div>

@endsection

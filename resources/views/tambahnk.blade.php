@extends('master')

@section('title', 'Nilai Kuliah')

@section('content')



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Kuliah - Tutorial CRUD Laravel</title>
    <!-- Add your CSS stylesheets and other head elements here -->
</head>
<body>

<div class="container">
    <h3>Nilai Kuliah</h3>

    <a href="/nilaikuliah" class="btn btn-primary">Kembali</a>

    <br/>
    <br/>

    <form action="/nilaikuliah/store" method="post" class="form-horizontal">
        {{ csrf_field() }}


        <div class="form-group row">
            <label for="NRP" class="col-sm-1 control-label">NRP</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="NRP" name="NRP">
            </div>
        </div>

        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-1 control-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-1 control-label">SKS</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="SKS" id="sks3" value="3">
                    <label class="form-check-label" for="sks3">3 SKS</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="SKS" id="sks4" value="4">
                    <label class="form-check-label" for="sks4">4 SKS</label>
                </div>
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

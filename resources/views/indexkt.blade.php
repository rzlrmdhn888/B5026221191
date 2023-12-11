@extends('master')

@section('title', 'Kategori')

@section('content')

    <h3>Pilih Kategori</h3>

    <br/>

    <form action="/kategori/lihat" method="post">
        @csrf
        <div class="form-group">
            <select name="kategori" id="kategori" class="form-control">
                @foreach($kategori as $k)
                    <option
                        value="{{ $k->ID }}">{{ $k->Nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">KIRIM</button>
    </form>


@endsection

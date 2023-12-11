<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(){
        $kategori = DB::table('kategori')->get();
        return view ('indexkt',['kategori'=> $kategori]);
    }
    public function store(Request $request)
    {
        DB::table('kategori')-> insert([
            'ID' => $request->ID,
			'Nama' => $request->Nama,
        ]);
        return redirect('/kategori/tambahkt');
    }
    public function tambah()
    {
        return view('tambahkt');
    }
}

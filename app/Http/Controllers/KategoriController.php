<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
	public function index()
	{
    	// mengambil data dari table kategori
		//$pegawai = DB::table('kategori')->get();
        $kategori = DB::table('kategori')->get();
    	// mengirim data pegawai ke view index
		return view('indexkt',['kategori' => $kategori]);

	}


    public function lihat(Request $request)
    {
        $selectedKategoriId = $request->input('kategori');

        $kategoriNama = DB::table('kategori')->where('ID', $selectedKategoriId)->value('Nama');

        return view('lihatkt', ['selectedKategoriId' => $selectedKategoriId,]);
}


}

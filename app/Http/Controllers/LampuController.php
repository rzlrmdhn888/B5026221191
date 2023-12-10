<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LampuController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$lampu = DB::table('lampu')->get();
        // $pegawai = DB::table('lampu')
        // ->orderBy('pegawai_nama', 'asc')
        // ->paginate(10);

    	// mengirim data pegawai ke view index
		return view('indexlp',['lampu' => $lampu]);
	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahlp');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('lampu')->insert([
			'merklampu' => $request->merklampu,
			'stocklampu' => $request->stocklampu,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/lampu');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$lampu = DB::table('lampu')->where('kodelampu',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editlp',['lampu' => $lampu]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('lampu')->where('kodelampu',$request->kodelampu)->update([
			'merklampu' => $request->merklampu,
			'stocklampu' => $request->stocklampu,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/lampu');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('lampu')->where('kodelampu',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/lampu');
	}
}

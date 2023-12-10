<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index(){
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        return view ('indexkb',['keranjangbelanja'=> $keranjangbelanja]);
    }
    public function store(Request $requestt)
    {
        DB::table('keranjangbelanja')-> insert([
            'ID' => $requestt->ID,
			'KodeBarang' => $requestt->KodeBarang,
			'Jumlah' => $requestt->Jumlah,
			'Harga' => $requestt->Harga
        ]);
        return redirect('/keranjangbelanja');
    }
    public function hapus($ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}
    public function tambah()
    {
        return view('tambahkb');
    }
}

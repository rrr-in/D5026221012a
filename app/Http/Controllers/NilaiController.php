<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
    	return view('indexNilai',['nilaikuliah' => $nilaikuliah]);

    }

    public function tambahNilai()
{

	// memanggil view tambah
	return view('tambahNilai');

}

// method untuk insert data ke table pegawai
public function storeNilai(Request $request)
{
	// insert data ke table pegawai
	DB::table('nilaikuliah')->insert([
		'ID' => $request->ID,
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/nilai');
}

}



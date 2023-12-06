<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KursiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$kursi = DB::table('kursi')->get();
        $kursi = DB::table('kursi')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexKursi',['kursi' => $kursi]);

    }

    public function tambah()
{

	// memanggil view tambah
	return view('tambahKursi');

}

public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('kursi')->insert([
		'kodekursi' => $request->kodekursi,
		'merkkursi' => $request->merkkursi,
		'stockkursi' => $request->stockkursi,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/kursi');

}

public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$kursi = DB::table('kursi')->where('kodekursi',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editKursi',['kursi' => $kursi]);

}

public function update(Request $request)
{
    
    // Update data if validation passes
    DB::table('kursi')->where('kodekursi', $request->id)->update([
        'merkkursi' => $request->merkkursi,
        'stockkursi' => $request->stockkursi,
        'tersedia' => $request->tersedia
    ]);

    // Redirect to the kursi page
    return redirect('/kursi');
}



public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('kursi')->where('kodekursi',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/kursi');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kursi = DB::table('kursi')
		->where('merkkursi','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexKursi',['kursi' => $kursi]);

	}

    public function view($id){
        $kursi = DB::table('kursi')->where('kodekursi', $id)->first();

        return view('viewKursi', ['kursi' => $kursi]);
    }
}

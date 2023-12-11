<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$karyawan = DB::table('karyawan')->get();

    	// mengirim data pegawai ke view index
    	return view('indexKaryawan',['karyawan' => $karyawan]);
    }

    public function tambah()
    {

	// memanggil view tambah
	return view('tambahKaryawan');
    }

    public function store(Request $request){

    $existKaryawan = DB::table('karyawan')
        ->where('kodepegawai', $request->kodepegawai)
        ->first();

    if ($existKaryawan) {
        return redirect('/karyawan')->with('error', 'Kode Pegawai sudah ada!');
    }

    DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
        'namalengkap' => $request->namalengkap,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
    ]);

    return redirect('/karyawan')->with('success', 'Data berhasil disimpan!');
}

    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
    }
}

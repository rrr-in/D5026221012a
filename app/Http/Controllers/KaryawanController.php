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

    public function store(Request $request)
{
    // Periksa apakah kodepegawai sudah ada dalam tabel sebelumnya
    $existingKaryawan = DB::table('karyawan')
        ->where('kodepegawai', $request->kodepegawai)
        ->first();

    // Jika kodepegawai sudah ada, beri respons atau pesan yang sesuai
    if ($existingKaryawan) {
        return redirect('/karyawan')->with('error', 'Kode Pegawai sudah ada dalam tabel.');
    }

    // Jika kodepegawai belum ada, lakukan penyisipan data ke dalam tabel
    DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
        'namalengkap' => $request->namalengkap,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
    ]);

    // Redirect dengan pesan sukses atau kembali ke halaman karyawan
    return redirect('/karyawan')->with('success', 'Data Karyawan berhasil disimpan.');
}






    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
    }
}

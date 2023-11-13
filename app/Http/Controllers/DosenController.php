<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{

    public function index(){
    $a = 3;
    $b = 7;
    $c = $a*$b;
        return "<h1>Hasil Perkalian = " .(string)$c . "</h1>";
    }

    public function showBlog(){
    $nama = "Budi";
    $alamat = "Surabaya";
    $umur = 18;
        return view('blog',['nama'=>$nama, 'alamat'=>$alamat,'umur'=>$umur]);
    }

    public function showNama($nama){
        return "Anda telah mengisikan : ". $nama; //$nama = {nama} di web.php
    }

    public function formulir(){
        //cek soal hak akses
    	return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
}
}



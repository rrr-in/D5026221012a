@extends('masterNilai')

@section('konten')
	<h3 class="text-center">Nilai Kuliah</h3>

	<br/>
	<br/>

	<form class="form-horizontal" role="form" action="/nilai/storeNilai" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">NRP</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="NRP" name="NRP" placeholder="Masukkan NRP Mahasiswa">
            </div>
        </div>

        <div class="form-group">
            <label for="umur" class="col-sm-2 control-label">Nilai Angka</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka" placeholder="Masukkan Nilai Angka Mahasiswa">
            </div>
        </div>

        <div class="form-group">
            <label for="umur" class="col-sm-2 control-label">SKS</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="SKS" name="SKS" placeholder="Masukkan SKS Mahasiswa">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
    </form>
@endsection

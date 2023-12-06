@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Kursi</h3>

    <br />
    <br />

    <form class="form-horizontal" role="form" action="/kursi/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Kode Kursi</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="kodekursi" name="kodekursi" placeholder="Masukkan Kode Kursi">
            </div>
        </div>

        <div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">Merk Kursi</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="merkkursi" name="merkkursi"
                    placeholder="Masukkan Merk Kursi">
            </div>
        </div>

        <div class="form-group">
            <label for="umur" class="col-sm-2 control-label">Stock Kursi</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="stockkursi" name="stockkursi"
                    placeholder="Masukkan Stock Kursi">
            </div>
        </div>
        {{-- <div class="form-group">
            <label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
            <div class="col-sm-8">
                <input type="checkbox" id="tersedia" name="tersedia" value="Y">
                <label for="Y"> Y</label><br>
                <input type="checkbox" id="tersedia" name="tersedia" value="T">
                <label for="T"> T</label><br>
            </div>
        </div> --}}


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
    </form>
@endsection

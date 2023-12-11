@extends('masterKaryawan')

@section('konten')
    <h3 class="text-center">Data Karyawan</h3>

    <br />
    <br />
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <table class="table table-striped table-hover">

    </table>
   

    <form class="form-horizontal" role="form" action="/karyawan/store" method="post" id="karyawanForm">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kodepegawai" class="col-sm-2 control-label">Kode Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="kodepegawai" name="kodepegawai"
                    placeholder="Masukkan Kode Pegawai" value="{{ old('kodepegawai') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="namalengkap" class="col-sm-2 control-label">Nama Lengkap</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="namalengkap" name="namalengkap"
                    placeholder="Masukkan Nama Lengkap Karyawan">

            </div>
        </div>

        <div class="form-group">
            <label for="divisi" class="col-sm-2 control-label">Divisi</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="divisi" name="divisi"
                    placeholder="Masukkan Divisi Karyawan">
            </div>
        </div>

        <div class="form-group">
            <label for="departemen" class="col-sm-2 control-label">Departemen</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="departemen" name="departemen"
                    placeholder="Masukkan Departemen Karyawan">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
    </form>
@endsection

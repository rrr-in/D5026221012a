@extends('master2')

@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
	<br/>
	<br/>
    <div class="row">
        <!-- Empty box displayed beside the form -->
        <div class="col-md-6">
            <!-- Replace this div with your empty box content -->
            <div style="border: 1px solid #ccc; padding: 10px; width: 350px; height: 250px;">
                <!-- Empty box content goes here -->

            </div>
        </div>

        <div class="col-md-6">
                <form class="form-horizontal" role="form" action="/pegawai/view/{{ $pegawai->pegawai_id }}" method="GET">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama"  value="{{  $pegawai->pegawai_nama }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="jabatan" value="{{ $pegawai->pegawai_jabatan }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="umur" class="col-sm-2 control-label">Umur</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="umur" value="{{ $pegawai->pegawai_umur }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="alamat">{{ $pegawai->pegawai_alamat }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <a href="/pegawai" class="btn btn-primary"> OK</a>
                        </div>
                    </div>

                </form>
        </div>
    </div>
@endsection

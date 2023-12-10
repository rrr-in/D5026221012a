@extends('master2')

@section('konten')
    <div class="container">

        <h3 class="text-center">Data Pegawai</h3>
        <br />
        <br />
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-sm-7">
                    <div class="card-group" style="height: 300px">
                        <div class="card bg-white">
                            <div class="card-body text-center">

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body d-flex flex-column justify-content-center">
                                <p class="card-text">Nama: {{ $pegawai->pegawai_nama }}</p>
                                <p class="card-text">Jabatan: {{ $pegawai->pegawai_jabatan }}</p>
                                <p class="card-text">Umur: {{ $pegawai->pegawai_umur }}</p>
                                <p class="card-text">Alamat: {{ $pegawai->pegawai_alamat }}</p>
                                <div class="text-center">
                                    <a href="/pegawai" class="btn btn-primary">OK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="justify-content-center">
        <div class="col-md-5">
            <div style="border: 1px solid #ccc; padding: 10px; height: 200px; width: 200px">
                <!-- Empty box content goes here -->
            </div>
        </div>

        <div class="col-md-5">
            <form class="form-horizontal" role="form" action="/pegawai/view/{{ $pegawai->pegawai_id }}" method="GET">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama" class="col-sm-4 control-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" value="{{ $pegawai->pegawai_nama }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="jabatan" class="col-sm-4 control-label">Jabatan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jabatan" value="{{ $pegawai->pegawai_jabatan }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="umur" class="col-sm-4 control-label">Umur</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="umur" value="{{ $pegawai->pegawai_umur }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat" class="col-sm-4 control-label">Alamat</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="alamat">{{ $pegawai->pegawai_alamat }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <a href="/pegawai" class="btn btn-primary"> OK</a>
                    </div>
                </div>


            </form>
        </div>--}}
    </div>
    </div>
@endsection

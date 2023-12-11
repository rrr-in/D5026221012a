@extends('masterKaryawan')

@section('title', 'Database Karyawan')

@section('judul_halaman')
    <h3 class="text-center">Data Karyawan</h3>
    <br />
    <br />
@endsection

@section('konten')
{{-- <p>Cari Karyawan :</p>
    <form action="/kursi/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Kursi berdasarkan merk .." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form> --}}
    <br>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped table-hover">
        <tr >
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>

        </tr>
        @foreach ($karyawan as $k)
            <tr >
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>
                <td>
               {{-- <a href="/kursi/view/{{ $k->kodekursi }}" class="btn btn-success">View</a>

                    <a href="/kursi/edit/{{ $k->kodekursi }}" class="btn btn-warning">Edit</a> --}}

                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Data</a>
    </div>
    {{-- {{ $kursi->links() }} --}}
@endsection

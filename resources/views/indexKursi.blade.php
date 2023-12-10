@extends('masterKursi')

@section('title', 'Database Kursi')

@section('judul_halaman')
    <h3 class="text-center">Data Kursi</h3>
    <a href="/kursi/tambah" class="btn btn-primary"> + Tambah Kursi Baru</a>

    <br />
    <br />
@endsection

@section('konten')
<p>Cari Kursi :</p>
    <form action="/kursi/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Kursi berdasarkan merk .." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Kursi</th>
            <th>Merk Kursi</th>
            <th>Stock Kursi</th>
            <th>Tersedia</th>
            <th>Opsi</th>
{{-- &#9989 --}}
        </tr>
        @foreach ($kursi as $k)
            <tr >
                <td>{{ $k->kodekursi }}</td>
                <td>{{ $k->merkkursi }}</td>
                <td>{{ $k->stockkursi }}</td>
                <td
                @if ($k->tersedia == "Y")
                class = "bg-success text-center text-white"
                @elseif ($k->tersedia == "T")
                class = "bg-danger text-center text-white"
                @endif
                >{{ $k->tersedia }}</td>
                <td>
                    <a href="/kursi/view/{{ $k->kodekursi }}" class="btn btn-success">View</a>

                    <a href="/kursi/edit/{{ $k->kodekursi }}" class="btn btn-warning">Edit</a>

                    <a href="/kursi/hapus/{{ $k->kodekursi }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $kursi->links() }}
@endsection

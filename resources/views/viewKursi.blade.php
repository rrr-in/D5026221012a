@extends('masterKursi')

@section('konten')

	<h3 class="text-center"> Data Kursi</h3>
	<br/>
	<br/>


    <div class="row">

              <div class=" col-md-6 d-flex justify-content-center">
                <div class="col-sm-7">
                    <div class="card-group" style="height: 300px; width: 300px">
                        <div class="card bg-white">
                            <div class="card-body text-center">

                            </div>
                        </div>

                    </div>
                </div>
            </div>


        <div class="col-md-6">
                <form class="form-horizontal" role="form" action="/kursi/view/{{ $kursi->kodekursi }}" method="GET">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Merk Kursi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama"  value="{{  $kursi->merkkursi }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="umur" class="col-sm-2 control-label">Stock Kursi</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="umur" value="{{ $kursi->stockkursi }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Tersedia</label>
                        <div class="col-sm-8">
                            <input type="radio" id="tersedia" name="tersedia" value="Y" {{ $kursi->tersedia === 'Y' ? 'checked' : '' }}>
                            <label for="Y"> Y</label><br>
                            <input type="radio" id="tersedia" name="tersedia" value="T" {{ $kursi->tersedia === 'T' ? 'checked' : '' }}>
                             <label for="T"> T</label><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <a href="/kursi" class="btn btn-primary"> OK</a>
                        </div>
                    </div>

                </form>
        </div>
    </div>
@endsection

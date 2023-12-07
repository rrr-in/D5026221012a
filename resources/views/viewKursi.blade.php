@extends('master2')

@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Kursi</h3>
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

@extends('masterKursi')

@section('konten')
    <h3 class="text-center">Data Kursi</h3>

    <a href="/kursi" class="btn btn-primary"> Kembali</a>

    <br/>
    <br/>

    @foreach($kursi as $k)
    <form class="form-horizontal" role="form" action="/kursi/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" id="id" value="{{ $k->kodekursi }}"> <br/>
        <div class="form-group">
            <label for="merkkursi" class="col-sm-2 control-label">Merk Kursi</label>
            <div class="col-sm-8">
               <input type="text" class="form-control" required="required" id="merkkursi" name="merkkursi" value="{{ $k->merkkursi }}">
            </div>
        </div>

        <div class="form-group">
            <label for="stockkursi" class="col-sm-2 control-label">Stock Kursi</label>
            <div class="col-sm-8">
                <input type="number" class="form-control" required="required" id="stockkursi" name="stockkursi" value="{{ $k->stockkursi }}" onchange="updateTersedia(this);">
            </div>
        </div>

        <div class="form-group">
            <label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
            <div class="col-sm-8">
                <label for="tersediaY">
                    <input type="radio" id="tersediaY" name="tersedia" value="Y" {{ $k->tersedia == 'Y' ? 'checked' : '' }}> Y
                </label><br>
                <label for="tersediaT">
                    <input type="radio" id="tersediaT" name="tersedia" value="T" {{ ($k->tersedia == 'T' || $k->stockkursi == 0) ? 'checked' : '' }}> T
                </label><br>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
    </form>
    @endforeach

    <script>
        function updateTersedia(element) {
            var stockValue = element.value;
            var tersediaT = document.getElementById('tersediaT');

            if (stockValue === '0') {
                tersediaT.checked = true;
            } else {
                tersediaY.checked = true;
            }
        }
    </script>
@endsection

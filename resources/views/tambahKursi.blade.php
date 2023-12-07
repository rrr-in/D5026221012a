@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Kursi</h3>

    <br />
    <br />

    <form class="form-horizontal" role="form" action="/kursi/store" method="post" id="kursiForm">
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
                    placeholder="Masukkan Stock Kursi" onchange="updateTersedia()">
            </div>
        </div>

        <div class="form-group">
            <label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
            <div class="col-sm-8">
                <label for="tersediaY">
                    <input type="radio" id="tersediaY" name="tersedia" value="Y"> Y
                </label><br>
                <label for="tersediaT">
                    <input type="radio" id="tersediaT" name="tersedia" value="T"> T
                </label><br>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
    </form>

    <script>
        function updateTersedia() {
            var stockValue = document.getElementById('stockkursi').value;
            var tersediaY = document.getElementById('tersediaY');
            var tersediaT = document.getElementById('tersediaT');

            if (stockValue === '0') {
                tersediaT.checked = true;
            } else {
                tersediaY.checked = true;
            }
        }

        // Call updateTersedia initially to set the initial radio button based on the default stock value
        updateTersedia();
    </script>
@endsection

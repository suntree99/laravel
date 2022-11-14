<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tambah Buku</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form action="{{ url('/store') }}" method="POST">
            <div class="panel panel-default">
                <div class="panel-heading">Form Tambah Data Buku</div>
                <div class="panel-body">
                    @csrf
                    <div class="row form-group">
                        <label for="judul_buku" class="col-lg-2 col-md-2">Judul Buku</label>
                        <div class="col-lg-10 col-md-10">
                            <input type="text" name="judul_buku" placeholder="Judul Buku" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="judul_buku" class="col-lg-2 col-md-2">Pengarang</label>
                        <div class="col-lg-10 col-md-10">
                            <input type="text" name="judul_buku" placeholder="Pengarang" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="judul_buku" class="col-lg-2 col-md-2">Halaman</label>
                        <div class="col-lg-10 col-md-10">
                            <input type="text" name="judul_buku" placeholder="Halaman" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <input type="text" value="Simpan" class="btn btn-success btn-sm">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
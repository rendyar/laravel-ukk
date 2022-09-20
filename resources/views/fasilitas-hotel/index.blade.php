<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="{{ route('fasilitas-hotel.create') }}" type="button" class="btn btn-primary my-4">Tambah data</a>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Fasilitas</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datafasilitas as $fasilitas)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $fasilitas->nama_fasilitas_hotel}}</td>
                    <td>{{ $fasilitas->deskripsi}}</td>
                    <td>{{ $fasilitas->url_gambar}}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('fasilitas-hotel.edit',$fasilitas->id) }}">Edit</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
@extends('template.dashboard')

@section('content')
    <div class="container">
        <a href="{{ route('kamar.create') }}" type="button" class="btn btn-outline-primary my-4">Tambah data</a>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type Kamar</th>
                    <th scope="col">Nama Fasilitas</th>
                    <th scope="col">Jumlah Kamar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datakamar as $kamar)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $kamar->type_kamar}}</td>
                    <td>{{ $kamar->nama_fasilitas }}</td>
                    <td>{{ $kamar->jml_kamar}}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('kamar.edit',$kamar->id) }}">Edit</a> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
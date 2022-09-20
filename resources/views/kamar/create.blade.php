@extends('template.dashboard')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card-body">
                    <form action="{{ route('kamar.store') }}" method="post">
                        @csrf
                        <div class="form-group my-3">
                            <label class="form-label my-3">Type Kamar</label>
                            <input type="text" name="type_kamar"  class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label class="form-label my-3">Nama Fasilitas</label>
                            <input type="text" name="nama_fasilitas"  class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label class="form-label my-3">Jumlah Kamar</label>
                            <input type="number" name="jml_kamar"  class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit Mahasiswa</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="number" name="nim" class="form-control" value="{{ $data->nim }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <input type="text" name="prodi" class="form-control" value="{{ $data->prodi }}">
                        </div>
                        <div class="form-group">
                            <label for="angkatan">Angkatan</label>
                            <input type="number" name="angkatan" class="form-control" value="{{ $data->angkatan }}">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a class="btn btn-warning" role="button" href="{{ url('/mahasiswa') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
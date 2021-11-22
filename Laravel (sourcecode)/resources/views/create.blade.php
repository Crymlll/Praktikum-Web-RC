@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Add Mahasiswa</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="number" name="nim" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <input type="text" name="prodi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="angkatan">Angkatan</label>
                            <input type="number" name="angkatan" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a class="btn btn-warning" role="button" href="{{ url('/mahasiswa') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
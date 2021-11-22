@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>DATA MAHASISWA</h1>
                    <a href="{{ url('create') }}" class="btn btn-primary"> + Add Mahasiswa</a>
                </div>

                <div class="col-lg-8 mt-5">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Action</th>
                        </tr>
                        @foreach ($data as $mhs)
                            <tr>
                                <td>{{ $mhs->nim }}</td>
                                <td>{{ $mhs->nama }}</td>
                                <td>{{ $mhs->prodi }}</td>
                                <td>{{ $mhs->angkatan }}</td> 
                                <td>
                                    <a href="{{ url('/show/'.$mhs->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ url('/destroy/'.$mhs->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
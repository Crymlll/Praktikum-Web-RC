@extends('layouts.default')

@section('content')
    <section>
        <div class="container d-flex justify-content-between">
            <div class="mt-5">
                <h1>Welcome to Crymlll Tech</h1>
                <p>Yuk tambahkan daftar namamu disini,<br> Disini kamu bisa mencari teman baru dan masih banyak lagi!<br>Syaratnya yang penting kamu mahasiswa.<br> Jangan lupa list yaaa</p>
                <a class="btn btn-primary" role="button" href="{{ url('/mahasiswa') }}">GET STARTED</a>
            </div>
            <div class="mt-5">
                <img src="https://yt3.ggpht.com/ytc/AKedOLQg2ctFsXJQXKWjR8NX4wSewhRPVBO7hRFSsxfrB1c=s900-c-k-c0x00ffffff-no-rj" class="img-thumbnail" alt="crymlll" width="400px" style="border-radius: 50%">
            </div>
        </div>
    </section>
@endsection
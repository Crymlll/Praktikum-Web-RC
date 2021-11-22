<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after.style')
</head>
<body style="overflow-x: hidden">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow p-3 mb-5">
        <div class="container">
            <a class="navbar-brand mb-0 h1" style="font-size: 32px" href="/">Crymlll</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                  <a class="nav-link {{ ($title === "Home")? 'active' : '' }}" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link {{ ($title === "about")? 'active' : '' }}" href="https://crymllldev.herokuapp.com/" target="__blank">About</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link {{ ($title === "List Mahasiswa")? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
                  </li>
              </ul>
            </div>
        </div>
        </nav>
        <div class="contrainer-fluid">
            <div class="row">
                @stack('before-content')
                @yield('content')
                @stack('after-content')
            </div>
        </div>
        
        @stack('before-script')
        @include('includes.script')
        @stack('after.script')

        <footer class="bg-dark text-center text-white fixed-bottom">
            <div class="container p-4 pb-0">
              <section class="mb-4">
          
                <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com/auliarahmanz/" role="button" target="__blank"
                  ><i class="fab fa-instagram"></i
                ></a>

                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/aulia-rahman-zulfi-634a71205/" role="button" target="__blank"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
          
                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Crymlll" role="button" target="__blank"
                  ><i class="fab fa-github"></i
                ></a>
              </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2021 Copyright
              <a class="text-white" href="https://github.com/Crymlll">Aulia Rahman Zulfi</a>
              (119140110)
            </div>
          </footer>
</body>
</html>
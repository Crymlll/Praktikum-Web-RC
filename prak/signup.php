<?php
    session_start();
    if (isset($_SESSION['userID'])){
        header("Location: home.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>119140110</title>
</head>
<body id="content">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow p-3 mb-5">
        <div class="container">
            <a class="navbar-brand mb-0 h1" style="font-size: 32px" href="/Praktikum/minggu8/prak/index.php">Crymlll</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/Praktikum/minggu8/prak/index.php">Home</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="https://crymllldev.herokuapp.com/" target="__blank">About</a>
                  </li>
              </ul>
            </div>
        </div>
    </nav>
    <div class="contrainer-fluid">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Sign Up</h1>
                    <form class="mt-4" id="form" onsubmit="register(); return false;">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" name="id" id="id" class="login-field form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" name="nama" id="nama" class="login-field form-control">
                        </div>
                        <div class="form-group">
                            <label for="uname">Username</label>
                            <input type="text" name="uname" id="uname" class="login-field form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="pass" id="pass" class="login-field form-control">
                        </div>
                        <div class="form-group mt-2">
                            <input type="submit" name="signup" value="Sign Up" class="btn btn-primary">
                        </div>
                    </form>
                    <div class="mt-5">
                        <a href="javascript:void()" onclick="log()">Already have an account? Login Here!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <!-- <img src="./assets/auliarz.svg" alt="wave background" class="body-bg"> -->
    <script src="https://kit.fontawesome.com/431122beae.js" crossorigin="anonymous"></script>

    <script>
        function register(){
            $.ajax({
                type: "POST",
                url: "/Praktikum/minggu8/prak/register.php",
                data: $("#form").serialize(),
                success: function(data) {
                    log();
                },
                error: function() {
                    alert('error handling here');
                }
            });
        }
    </script>
</body>
</html>
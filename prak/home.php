<?php
    session_start();
    if (!isset($_SESSION['userID'])){
        header("Location: index.php");
        die();
    }
?>

<?php require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/iklan/iklan.css">
</head>

<body>
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
                  <li class="nav-item">
                    <a class="nav-link btn-out" style="color:black; margin-left:70px;" href="/Praktikum/minggu8/prak/logout.php">Logout</a>
                  </li>
              </ul>
            </div>
        </div>
    </nav>
    
    <h1>NEWS</h1>
    <section class="base">
        <main>
            <?php foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card" data-id="<?= $item['id']; ?>" onclick="addHist(this)">
                        <div class="container">
                            <h3 class="card-head"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </main>

        <aside>
            <h2>History</h2>
            <div id="history_buck"></div>
            <button class="button" onclick="clearhistory()">clear history</button>
        </aside>
    </section>
    
    <button class="button" onclick="clearcookies()">clear cookies</button>

    <footer class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
            <section class="mb-4">
            <!-- IG auliarahmanz-->
            <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com/auliarahmanz/" role="button" target="__blank"
                ><i class="fab fa-instagram"></i
            ></a>
            <!-- lINKEDIN auliarz-->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/aulia-rahman-zulfi-634a71205/" role="button" target="__blank"
                ><i class="fab fa-linkedin-in"></i
            ></a>
        
            <!-- Github Crymlll-->
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
    <script src="https://kit.fontawesome.com/431122beae.js" crossorigin="anonymous"></script>

    <script>
        function clearhistory(){
            localStorage.clear();
            
            const history_buck = document.getElementById('history_buck')
            let template = ''
            history_buck.innerHTML = template
        }

        function histRender(){
            const history_buck = document.getElementById('history_buck')
            let template = ''
            if (localStorage.arrOfHyst !== null){
                let histories = JSON.parse(localStorage.arrOfHyst)

                histories = [...new Set(histories)]

                histories.forEach(item => {
                    const hist = JSON.parse(localStorage.getItem(item))

                    template += `
                    <div class="template" style="border:solid 1px gray; margin:2px; border-radius: 10px; padding:5px; margin:5px">
                        <h5 style="margin:0; ">${hist.judul}</h5>
                        <p style="margin:0; ">${hist.judul}</p>
                    </div>
                    `
                })

                history_buck.innerHTML = template
            }
        }
        histRender()

        function addHist(el){
            const id = el.getAttribute('data-id');
            const judul = el.getElementsByClassName('card-head')[0].innerText
            const isi = el.getElementsByClassName('card-body')[0].innerText

            const histItem = {
                id: id,
                judul: judul,
                isi: isi
            }

            if(localStorage.getItem('arrOfHyst') !== null){
                let histories = JSON.parse(localStorage.arrOfHyst)
                histories.push('hyst' + id)
                histories = [...new Set(histories)]

                localStorage.setItem('arrOfHyst', JSON.stringify(histories))
            } else{
                localStorage.setItem('arrOfHyst', JSON.stringify(['hyst' + id]))
            }
            localStorage.setItem('hyst' + id, JSON.stringify(histItem))

            histRender()
        }

        function logout(){
            $.ajax({
                type: "POST",
                url: "/Praktikum/minggu8/prak/logout.php",
                data: $("#form").serialize(),
                success: function(data) {
                    log();
                },
                error: function() {
                    alert('error handling here');
                }
            });
        }

        function clearcookies() {
            var cookies = document.cookie.split(";");

            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i];
                var eqPos = cookie.indexOf("=");
                var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
        }

    </script>

    
    <?php
        if(!isset($_COOKIE['tolak']) || $_COOKIE['tolak'] !== 'yes'){
            echo '<script src="./assets/iklan/iklan.js"></script>';
        }
    ?>
</body>

</html>
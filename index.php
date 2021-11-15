<?php
    class buah{
        

        private $nama;
        protected $harga, $jumlah;

        function __construct($nama,$harga,$jumlah){
            $this->nama = $nama;
            $this->harga = $harga;
            $this->jumlah = $jumlah;
        }

        public function getNama(){
            return $this->nama;
        }

        public function getHarga(){
            return $this->harga;
        }

        public function getJumlah(){
            return $this->jumlah;
        }

        public function getTotal(){
            return $this->harga * $this->jumlah;
        }

    }

    class Mangga extends Buah{
        
        public function __construct($jumlah){
            parent::__construct("Mangga",15000, $jumlah);
        }
    }

    class Jambu extends Buah{
        
        public function __construct($jumlah){
            parent::__construct("Jambu",13000, $jumlah);
        }
    }

    class Salak extends Buah{
        
        public function __construct($jumlah){
            parent::__construct("Salak",10000, $jumlah);
        }
    }

    class receipt{


        private $total = array();
        public function setTotal($harga){
            return array_push($this->total,$harga);
        }

        public function getTotal(){
            return array_sum($this->total);
        }
    }

    if(isset($_POST['submit'])){
        $bayar = new receipt;
        $beliMangga= new Mangga($_POST['mangga']);
        // echo $beliMangga->getTotal(),"<br>";
        $bayar->setTotal($beliMangga->getTotal());

        $beliJambu= new Jambu($_POST['jambu']);
        // echo $beliJambu->getTotal(),"<br>";
        $bayar->setTotal($beliJambu->getTotal());

        $beliSalak= new Salak($_POST['salak']);
        // echo $beliSalak->getTotal(),"<br>";
        $bayar->setTotal($beliSalak->getTotal());

        // echo $bayar->getTotal();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="static/style.css">
    <title>Tugas Praktikum 6</title>
</head>
<body>
    <div class="head">
        <table>
            <tr>
                <th> 
                    <img class="logo" src="static/itera.png" alt="itera" width="80">
                </th>
                <th>
                    <h1 class="text">INSTITUT TEKNOLOGI SUMATERA</h1>
                </th>
            </tr>
        </table>
    </div>
    <nav>
        <ul>
            <li><a href="javascript:void()">Home</a></li>
            <li><a href="javascript:void()">Profile</a></li>
            <li><a href="https://www.instagram.com/auliarahmanz/" target="_blank">Instagram</a></li>
        </ul>
    </nav>
    
    <div>
        <form method="POST" action="">
            <table id="content">
                <tr>
                    <td colspan="3">Pesan Buah</td>
                </tr>
                <tr>
                    <td>Buah</td>
                    <td>Harga / Kg</td>
                    <td>Jumlah / Kg</td>
                </tr>
                <tr>
                    <td>Mangga</td>
                    <td>Rp 15.000</td>
                    <td><input id="mangga" type="number" name="mangga" value="0" min="0" required></td>
                </tr>
                <tr>
                    <td>Jambu</td>
                    <td>Rp 13.000</td>
                    <td><input id="jambu" type="number" name="jambu" value="0" min="0" required></td>
                </tr>
                <tr>
                    <td>Salak</td>
                    <td>Rp 10.000</td>
                    <td><input id="salak" type="number" name="salak" value="0" min="0" required></td>
                </tr>
                <tr>
                    <td colspan="3"><button type="submit" name="submit" onsubmit="sum()">submit</button></td>
                </tr>
            </table>
        </form>
    </div>
    
    <?php if(isset($_POST['submit'])){  ?>
        <div class="container">
            <table id="content">
                <tr>
                    <td colspan="3">Receipt</td>
                </tr>
                <tr>
                    <td>Buah</td>
                    <td>Jumlah</td>
                    <td>Total Harga</td>
                </tr>
                <tr>
                    <td>Mangga</td>
                    <td id="jumlahMangga"><?php echo $beliMangga->getJumlah(); ?></td>
                    <td id="totalMangga"><?php echo $beliMangga->getTotal(); ?></td>
                </tr>
                <tr>
                    <td>Jambu</td>
                    <td id="jumlahJambu"><?php echo $beliJambu->getJumlah(); ?></td>
                    <td id="totalJambu"><?php echo $beliJambu->getTotal(); ?></td>
                </tr>
                <tr>
                    <td>Salak</td>
                    <td id="jumlahSalak"><?php echo $beliSalak->getJumlah(); ?></td>
                    <td id="totalSalak"><?php echo $beliSalak->getTotal(); ?></td>
                </tr>
                <tr>
                    <td colspan="3">Total Harga : <?php echo $bayar->getTotal(); ?></td>
                </tr>
            </table>
            <p id="totalHarga"></p>
        </div>
    <?php } ?>

    <div class="footer">
        <footer>
            <p>Copyright &copy; 2021 Aulia Rahman Zulfi<br>119140110</p>
        </footer>
    </div>

    <script>
        function sum(){
            let mg = document.getElementById("jumlahMangga").value
            let mag = document.getElementById("totalMangga").value
            mg.innerHTML = "<?php echo $beliMangga->getJumlah(); ?>"
            mag.innerHTML = "<?php echo $beliMangga->getTotal(); ?>"

            let jb = document.getElementById("jumlahJambu").value
            let jab = document.getElementById("totalJambu").value
            jb.innerHTML = "<?php echo $beliJambu->getJumlah(); ?>"
            jab.innerHTML = "<?php echo $beliJambu->getTotal(); ?>"

            let sk = document.getElementById("jumlahSalak").value
            let sak = document.getElementById("totalSalak").value
            sk.innerHTML = "<?php echo $beliSalak->getJumlah(); ?>"
            sak.innerHTML = "<?php echo $beliSalak->getTotal(); ?>"

            totalHarga = document.getElementById("totalHarga")
            totalHarga.innerHTML = "<?php echo $bayar->getTotal(); ?>"
        }
    </script>
</body>
</html>
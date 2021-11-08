<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="static/style.css">
    <title>Praktikum 5</title>
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
            <li><a href="javascript:void()" onclick="task1()">SOAL NO 1</a></li>
            <li><a href="javascript:void()" onclick="task2()">SOAL NO 2</a></li>
            <li><a href="javascript:void()" onclick="task3()">SOAL NO 3</a></li>
        </ul>
    </nav>
    <div id="content"></div>
    <div class="footer">
        <footer>
            <p>Copyright &copy; 2021 Aulia Rahman Zulfi<br>119140110</p>
        </footer>
    </div>
</body>
<script>
    function task1(){
        $.get("calculator.php", function(data) {
            $("#content").html(data);
        });
    }
    function task2(){
        $.get("random.php", function(data) {
            $("#content").html(data);
        });
    }
    function task3(){
        $.get("prima.php", function(data) {
            $("#content").html(data);
        });
    }
</script>
</html>
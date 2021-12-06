<?php
    session_start();

    $_SESSION = array();

    session_destroy();

    $BASE_URL = "/Praktikum/minggu8/prak";
    header("Location: $BASE_URL/index.php");
?>
<?php
    // session_start();
    require_once 'conection.php';
    $con = db_connect();

    $code = mysqli_real_escape_string($con, $_GET["id"]);

    $sql = "SELECT * FROM menu WHERE menu_id = '$code'";
    $query = mysqli_query($con, $sql);
    $hasil = mysqli_fetch_object($query);
    // $jumlah;

    $_SESSION["cart"][$id] = [
        "nama" => $hasil-> menu_name,
        "harga" => $hasil->price,
        "jumlah" => 1
    ];

    header("Location: cart.php");
?>
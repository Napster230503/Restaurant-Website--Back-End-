<?php

    $sql = "SELECT * FROM menu WHERE menu_id = 'F02'";
    $result = mysqli_query($con, $sql);

    while($data = mysqli_fetch_assoc($result)){
    // $menuId = $data['menu_id'];
    $namaMenu = $data['menu_name'];
    }
    
    // require_once 'conection.php';
    $con = db_connect();

    $jumlah = mysqli_real_escape_string($con, $_POST['jumlah']);
    $levelPedas = mysqli_real_escape_string($con, $_POST['pesanan']);
    $metode = mysqli_real_escape_string($con, $_POST['pemsanan']);
    $total = mysqli_real_escape_string($con, $_POST['total']);

    if (empty($jumlah)) {
        header("Location: payment2.php?error= cannot be empty!");
        die();
    }
    if (empty($levelPedas)) {
        header("Location: payment2.php?error= cannot be empty!");
        die();
    }
    if (empty($metode)) {
        header("Location: payment2.php?error= cannot be empty!");
        die();
    }

    $sql = "INSERT into cart (id, nama_menu, jumlah, levelPedas, metode, Total) VALUES ('', '$namaMenu','$jumlah', '$levelPedas', '$metode', '$total')";
    mysqli_query($con, $sql);
    header("Location: payment2.php?sukses=Data Saved Successfully!");
?>
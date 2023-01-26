<?php
    // session_start();
    require_once 'koneksi.php';
    $koneksi;

    $orderId = "O003";
    $custId = "cust000003";
    $empId = "emp0000003";

    $sql = "INSERT INTO orders (order_id, cust_id, emp_id) values (".$orderId.", ".$custId.", ".$empId.")";
    $query = mysqli_query($koneksi, $sql);

    // id transaksi dibawah ini
    $id_transaksi = mysqli_insert_id($koneksi);

    foreach($_SESSION["cart"] as $cart => $val){
        $script = "INSERT INTO order_detail (order_id, menu_id, jumlah) VALUES (".$orderId.",".$dad.",".$val['jumlah'].")";
        $hasil = mysqli_query($koneksi, $script);
    }

    header("Location: cart.php");
?>
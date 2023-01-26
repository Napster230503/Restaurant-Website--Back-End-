<?php
    // session_start();
    require_once 'koneksi.php';
    $koneksi;

    $sql = "INSERT INTO orders (tanggal_transaksi) values ('".date("Y-m-d")."')";
    $query = mysqli_query($koneksi, $sql);

    // id transaksi dibawah ini
    $id_transaksi = mysqli_insert_id($koneksi);

    foreach($_SESSION["cart"] as $cart => $val){
        $script = "INSERT INTO detail_transaksi (id_header_transaksi, id_produk, jumlah) VALUES (".$id_transaksi.",".$cart.",".$val['jumlah'].")";
       $hasil = mysqli_query($koneksi, $script);

    }

    header("Location: cart.php");
?>
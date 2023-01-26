<?php
    // session_start();
    require_once 'conection.php';
    //include 'autocode.php';
    //include 'autoCodeCust.php';
    //include 'autocode_emp.php';

    // $koneksi;
    $con = db_connect();
    $orderid = 'O'.time();
    $custid = 'cust'.time();//'SELECT cust_id FROM customer where cust_name = "Online"' ;
    $empid = 'emp'.time();//'SELECT emp_id FROM employee WHERE emp_name = "Online"' ;
    // echo $orderid;
    // echo $custid;
    // echo $empid;
    $sql = "INSERT INTO orders (order_id, cust_id, emp_id) values ('".$orderid."', '".$custid."', '".$empid."')";
    $query = mysqli_query($con, $sql);

    // menambahkan id terakhir
    // $id_transaksi = mysqli_insert_id($koneksi);

    foreach($_SESSION["cart"] as $cart => $val){
        $script = "INSERT INTO order_detail (order_id, menu_id, jumlah, order_date, Total_price) VALUES ('".$orderid."','".$val['id']."',".$val["jumlah"].", '".date("Y-m-d")."', ".$val['harga'].")";

        $hasil = mysqli_query($con, $script);
    }
    db_disconnect($con);
    header("Location: food.php");
?>
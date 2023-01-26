<?php
    // session_start();
    require_once 'conection.php';
    //include 'autocode.php';
    //include 'autoCodeCust.php';
    //include 'autocode_emp.php';

    // $koneksi;
    $con = db_connect();
    $orderid = 'O'.time();
<<<<<<< HEAD
    $cust = 'cust000006'; //"SELECT cust_id FROM customer WHERE cust_name = 'Online'";
    $emp = 'emp0000006';//"SELECT emp_id FROM employee WHERE emp_name = 'Online'";
    // $hasilCust = mysqli_query($con, $cust);
    // $hasilEmp = mysqli_query($con, $emp);
   
    // while($rowCust = mysqli_fetch_assoc($hasilCust)){
    //     $rowCust['cust_id'];
    //     echo $rowCust;
    //     var_dump($rowCust);
    // }

    // while($rowEmp = mysqli_fetch_assoc($hasilEmp)){
    //     $rowEmp['emp_id'];
    //     echo $rowEmp;
    //     var_dump($rowEmp);
    // }

    
    
    // while($rowCust = mysqli_fetch_assoc($hasilCust)){
    //     $rowCust['cust_id'];
    // }
    // while($rowEmp = mysqli_fetch_assoc($hasilEmp)){
    //     $rowEmp['emp_id'];
    // }
    // echo $orderid;
    // echo $hasilCust;
    // echo $hasilEmp;
    
=======
    $cust = 'cust'.time();//'SELECT cust_id FROM customer where cust_name = "Online"' ;
    $emp = 'emp'.time();//'SELECT emp_id FROM employee WHERE emp_name = "Online"' ;
    // echo $orderid;
    // echo $custid;
    // echo $empid;
>>>>>>> 188519e8409bec701e15169712a5e4b4e58a9084
    $sql = "INSERT INTO orders (order_id, cust_id, emp_id) values ('".$orderid."', '".$cust."', '".$emp."')";
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
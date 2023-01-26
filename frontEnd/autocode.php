<?php
include_once '../conection.php';
$con = db_connect();
$sql = "SELECT * FROM orders";
$result = mysqli_query($con, $sql);

$sql = mysqli_query($con, "SELECT max(order_id) as MaxID FROM orders");
$data = mysqli_fetch_array($sql);

$kode = $data['MaxID'];

$kode++;
$ket = '';
$autocode = $ket . sprintf("%03s", $kode);

echo $autocode;
?>

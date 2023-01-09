<?php
require_once '../conection.php';
$con = db_connect();

$id = mysqli_real_escape_string($con, $_POST["id"]);
$name = mysqli_real_escape_string($con, $_POST["name"]);
$address = mysqli_real_escape_string($con, $_POST["address"]);
$mail = mysqli_real_escape_string($con, $POST["mail"])
$tlp = mysqli_real_escape_string($con, $_POST["tlp"]);

// Melakukan validasi terhadap data
if (empty($id)) {
    header("Location: create_cust.php?error=Customer id cannot be empty!");
    die();
}
if (empty($name)) {
    header("Location: create_cust.php?error=Customer name cannot be empty!");
    die();
}
if (empty($address)) {
    header("Location: create_cust.php?error=Customer address cannot be empty!");
    die();
}
if(empty($mail)){
    header("Location: create_cust.php?error=customer mail cannot be empty!");
}
if (!is_numeric($telp)) {
    header("Location: create_cust.php?error=Telp must be numeric!");
    die();
}

// Membuat dan menjalankan query
$sql = "INSERT INTO customer (cust_id, cust_name, cust_address, cust_mail, no_tlp) VALUES ('$id','$name', '$address','$mail'. $tlp)";
mysqli_query($con, $sql);
// Menutup koneksi
db_disconnect($con);
header("Location: create_cust.php?success=Data Saved Successfully!");
?>
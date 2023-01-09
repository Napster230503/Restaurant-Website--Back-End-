<?php
require_once "../conection.php";
$con = db_connect();

$id = mysqli_real_escape_string($con, $_POST["id"]);
$name = mysqli_real_escape_string($con, $_POST["name"]);
$address = mysqli_real_escape_string($con, $_POST["address"]);
$mail = mysqli_escape_string($con, $_POST["mail"]);
$tlp = mysqli_real_escape_string($con, $_POST["tlp"]);


// Melakukan validasi terhadap data
if (empty($id)) {
    header("Location: update_cust.php?error=Kode pegawai tidak boleh kosong!");
    die();
}
if (empty($name)) {
    header("Location: update_cust.php?error=Nama pegawai tidak boleh kosong!");
    die();
}
if (empty($address)) {
    header("Location: update_cust.php?error=Alamat tidak boleh kosong!");
    die();
}
if(empty($mail)){
    header("Location: update_cust.php?error=Alamat tidak boleh kosong!");
    die();
}
if (!is_numeric($tlp)) {
    header("Location: update_cust.php?error=No tlp harus angka!");
    die();
}

 
// Membuat dan menjalankan query
$sql = "UPDATE employee SET emp_name='$name', emp_address='$address', no_tlp='$tlp' WHERE emp_id='$id'";
mysqli_query($con, $sql);
// Menutup koneksi
db_disconnect($con);
header("Location: index.php?success=Data Updated Successfully!");
?>



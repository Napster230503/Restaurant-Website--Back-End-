<?php
require_once "../conection.php";
$con = db_connect();

$code = mysqli_real_escape_string($con, $_POST["code"]);
$name = mysqli_real_escape_string($con, $_POST["name"]);
$address = mysqli_real_escape_string($con, $_POST["address"]);
$zipcode = mysqli_real_escape_string($con, $_POST["zipcode"]);
$dob = mysqli_real_escape_string($con, $_POST["dob"]);

// Melakukan validasi terhadap data
if (empty($code)) {
    header("Location: update.php?error=Kode pegawai tidak boleh kosong!");
    die();
}
if (empty($name)) {
    header("Location: update.php?error=Nama pegawai tidak boleh kosong!");
    die();
}
if (empty($address)) {
    header("Location: update.php?error=Alamat tidak boleh kosong!");
    die();
}
if (!is_numeric($zipcode)) {
    header("Location: update.php?error=Kode pos harus angka!");
    die();
}
if ($dob > date("Y-m-d")) {
    header("Location: update.php?error=Tanggal lahir tidak boleh melebihi tanggal saat ini!");
    die();
}
 
// Membuat dan menjalankan query
$sql = "UPDATE employee SET ";
$sql = $sql . "EmpName = '$name', ";
$sql = $sql . "EmpAddress = '$address', ";
$sql = $sql . "EmpZipCode = $zipcode, ";
$sql = $sql . "EmpDOB = '$dob' ";
$sql = $sql . "WHERE EmpCode = '$code'";
mysqli_query($con, $sql);
// Menutup koneksi
db_disconnect($con);
header("Location: index.php?success=Data Updated Successfully!");
?>
<?php
// koneksi
require_once('koneksi.php');

$nik=$_GET['nik'];

// echo $id;
$query="DELETE FROM tb_kependudukan WHERE nik = '$nik'";
$data=mysqli_query($conn,$query);

// menampung hasil
$row=mysqli_fetch_assoc($data);
// var_dump($row);

header('location: tampil_data.php')

?>
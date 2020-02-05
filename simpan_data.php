<?php 
//koneksi
require_once('koneksi.php');

//ambil data dari from
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$status=$_POST['status'];
$golongan=$_POST['golongan'];

//memasukan data ke database
$query="INSERT INTO tb_kependudukan VALUES ('$nik','$nama','$gender','$alamat','$status','$golongan')";
$simpan=mysqli_query($conn,$query);

header('location: tampil_data.php')
// if($simpan) {
// 	echo "Data Berhasil Disimpan";
// }else{
// 	echo "Data Gagal Disimpan";
// }

 ?>

<!-- <a href="tampil_data.php">kembali</a> -->
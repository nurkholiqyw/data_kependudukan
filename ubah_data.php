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
$query="UPDATE tb_kependudukan SET nama = '$nama', gender = '$gender', alamat='$alamat', status='$status', golongan = '$golongan' WHERE nik = '$nik'";
$simpan=mysqli_query($conn,$query);

// langsung pindah ke laman tampil data
header('location: tampil_data.php')
// if($simpan) {
// 	echo "Data Berhasil Disimpan";
// }else{
// 	echo "Data Gagal Disimpan";
// }

 ?>

<!-- <a href="tampil_data.php">kembali</a> -->
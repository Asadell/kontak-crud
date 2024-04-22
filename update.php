<?php  
// koneksi database 
include 'connection.php'; 
// menangkap data yang di kirim dari form 
$ID = $_POST['ID']; 
$namaDepan = $_POST['namaDepan']; 
$namaBelakang = $_POST['namaBelakang']; 
$alamatEmail = $_POST['alamatEmail']; 
//echo $NamaBelakang; 
// update data ke database 
$sql = "UPDATE kontak Set nama_depan='$namaDepan', nama_belakang='$namaBelakang', email='$alamatEmail' WHERE id_kontak = $ID"; 
$result = $db_conn->query($sql); 
// mengalihkan halaman kembali ke index.php 
header("location:index.php"); 
?>
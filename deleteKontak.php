<?php  
// koneksi database 
include 'connection.php'; 
// menangkap data yang di kirim dari index.php 
$ID = $_GET['id'];
// delete data ke database 
$sql = "DELETE FROM kontak WHERE id_kontak = $ID"; 
$result = $db_conn->query($sql); 
// mengalihkan halaman kembali ke index.php 
header("location:index.php"); 
?>
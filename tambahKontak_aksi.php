<?php  
// koneksi database 
include 'connection.php'; 
  
// menangkap data yang di kirim dari form 
$namaDepan = $_POST['namaDepan']; 
$namaBelakang = $_POST['namaBelakang']; 
$alamatEmail = $_POST['alamatEmail']; 

// menginput data ke database 
$sql = "INSERT INTO kontak (nama_depan, nama_belakang, email)
Values ('$namaDepan', '$namaBelakang', '$alamatEmail')"; 
$result = $db_conn->query($sql); 
//mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$alamat')"); 

// mengalihkan halaman kembali ke index.php 
header("location:index.php"); 
?>
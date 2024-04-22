<?php  
// koneksi database 
include 'connection.php'; 
// menangkap data yang di kirim dari form 
$ID = $_POST['ID']; 
$namaDepan = $_POST['namaDepan']; 
$namaBelakang = $_POST['namaBelakang']; 
$perusahaan = $_POST['perusahaan']; 
$jabatan = $_POST['jabatan']; 
$email = $_POST['email']; 
$web = $_POST['web']; 
$kategori = $_POST['kategori']; 
$street = $_POST['street']; 
$kota = $_POST['kota']; 
$provinsi = $_POST['provinsi']; 
$kodepos = $_POST['kodepos']; 
$negara = $_POST['negara']; 
$telpKantor = $_POST['telpKantor']; 
$telpRumah = $_POST['telpRumah']; 
$telpSeluler = $_POST['telpSeluler']; 
$noFaks = $_POST['noFaks']; 
$catatan = $_POST['catatan']; 

//echo $NamaBelakang; 
// update data ke database 
$sql = "UPDATE kontak Set nama_depan='$namaDepan', nama_belakang='$namaBelakang', email='$email', perusahaan = '$perusahaan', jabatan = '$jabatan', web = '$web', kategori = '$kategori', telpKantor = '$telpKantor', telpRumah = '$telpRumah', telpSeluler = '$telpSeluler', noFaks = '$noFaks', street = '$street', kota = '$kota', provinsi = '$provinsi', kodePos = '$kodepos', negara = '$negara', catatan = '$catatan' WHERE id_kontak = $ID"; 
$result = $db_conn->query($sql); 
// mengalihkan halaman kembali ke index.php 
header("location:index.php"); 
?>
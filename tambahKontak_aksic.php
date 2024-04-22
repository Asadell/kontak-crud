<?php  
// koneksi database 
include 'connection.php'; 
  
// menangkap data yang di kirim dari form 
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

// menginput data ke database 
$sql = "INSERT INTO kontak (nama_depan, nama_belakang, email, perusahaan, jabatan, web, kategori, telpKantor, telpRumah, telpSeluler, noFaks, street, kota, provinsi, kodePos, negara, catatan)
                Values ('$namaDepan', '$namaBelakang', '$email', '$perusahaan', '$jabatan', '$web', '$kategori', '$telpKantor', '$telpRumah', '$telpSeluler', '$noFaks', '$street', '$kota', '$provinsi', '$kodepos', '$negara', '$catatan')"; 
$result = $db_conn->query($sql); 
//mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$alamat')"); 

// mengalihkan halaman kembali ke index.php 
header("location:index.php"); 
?>
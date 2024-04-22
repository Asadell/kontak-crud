<?php 
  $db = 'D:\Kuliah\SEMESTERRR\smstr 2\MAKUL\Praktikum Pemrograman Web\Database\Sample\kontak.accdb'; 
  $db_username = ''; 
  $db_password = ''; 
  if(!file_exists($db)){ 
    die("Error finding access database"); 
  } 
  if(file_exists($db)){ 
    // die("Berhasil ketemu access database"); 
    echo "Berhasil ketemu access database"; 
  } 
  $db_conn = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$db; 
  Uid=$db_username; Pwd=$db_password;"); 
?> 
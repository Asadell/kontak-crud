<!DOCTYPE html>
<html>
  <head>
    <title>Kontak Bisnis</title>
  </head>
  <body>
    <h2>Kontak Bisnis - MS Acces</h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>Edit Kontak Bisnis</h3>

    <?php 
    include 'connection.php'; 
    $id = $_GET['id']; 
    $sql = "SELECT id_kontak, nama_depan, nama_belakang, email FROM kontak WHERE id_kontak = $id"; 
    $result = $db_conn->query($sql); 
    while($row = $result->fetch()){ 
    ?> 
    <form method="post" action="update.php">
      <table>
        <tr>
          <td>Nama Depan</td>
          <td>
            <input
              type="hidden"
              name="ID"
              value="<?php echo $row[0]; ?>" />
            <input
              type="text"
              name="namaDepan"
              value="<?php echo $row[1]; ?>" />
          </td>
        </tr>
        <tr>
          <td>Nama Belakang</td>
          <td>
            <input
              type="text"
              name="namaBelakang"
              value="<?php echo $row[2]; ?>" />
          </td>
        </tr>
        <tr>
          <td>Alamat Email</td>
          <td>
            <input
              type="text"
              name="alamatEmail"
              value="<?php echo $row[3]; ?>" />
          </td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="UPDATE" /></td>
        </tr>
      </table>
    </form>
    <?php  
    } 
    ?> 
  </body>
</html>

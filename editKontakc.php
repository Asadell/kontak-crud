<!DOCTYPE html>
<html>
  <head>
    <title>Kontak Bisnis</title>
    <style>
      .form-container {
        display: flex;
        justify-content: space-between;
      }

      .form-column {
        width: 48%; /* Atur lebar kolom sesuai kebutuhan */
      }

      .form-group {
        display: flex;
        flex-direction: column;
        /* margin-bottom: 10px; */
      }

      .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
      }

      .form-group input,
      .form-group textarea,
      .form-group select {
        width: calc(100% - 10px); /* Sesuaikan dengan margin-bottom */
        padding: 1px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      .form-group button {
        width: 100%;
        padding: 10px 20px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      .form-group button:hover {
        background-color: #45a049;
      }

      /* CSS tambahan untuk menempatkan label dan input secara horizontal */
      .form-group.horizontal {
        flex-direction: row;
        align-items: center;
      }

      .form-group.horizontal label {
        margin-right: 10px;
      }
    </style>
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
    $sql = "SELECT id_kontak, nama_depan, nama_belakang, perusahaan, jabatan, email, web, kategori, telpKantor, telpRumah, telpSeluler, noFaks, street, kota, provinsi, kodepos, negara, catatan FROM kontak WHERE id_kontak = $id"; 
    $result = $db_conn->query($sql); 
    while($row = $result->fetch()){ 
    ?> 
    <form class="form-container" method="post" action="updatec.php">
      <div class="form-column">
        <input type="hidden" name="ID" value="<?php echo $row[0]; ?>" />
        <div class="form-group horizontal">
          <label>namaDepan:</label>
          <input type="text" name="namaDepan" value="<?php echo $row[1]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>namaBelakang:</label>
          <input type="text" name="namaBelakang" value="<?php echo $row[2]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>perusahaan:</label>
          <input type="text" name="perusahaan" value="<?php echo $row[3]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>jabatan:</label>
          <input type="text" name="jabatan" value="<?php echo $row[4]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>email:</label>
          <input type="text" name="email" value="<?php echo $row[5]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>web:</label>
          <input type="text" name="web" value="<?php echo $row[6]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>kategori:</label>
          <input type="text" name="kategori" value="<?php echo $row[7]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>street:</label>
          <input type="text" name="street" value="<?php echo $row[12]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>kota:</label>
          <input type="text" name="kota" value="<?php echo $row[13]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>provinsi:</label>
          <input type="text" name="provinsi" value="<?php echo $row[14]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>Kode Pos:</label>
          <input type="text" name="kodepos" value="<?php echo $row[15]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>Negara:</label>
          <input type="text" name="negara" value="<?php echo $row[16]; ?>"/>
        </div>
      </div>
      <div class="form-column">
        <div class="form-group horizontal">
          <label>telpKantor:</label>
          <input type="text" name="telpKantor" value="<?php echo $row[8]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>telpRumah:</label>
          <input type="text" name="telpRumah" value="<?php echo $row[9]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>telpSeluler:</label>
          <input type="text" name="telpSeluler" value="<?php echo $row[10]; ?>"/>
        </div>
        <div class="form-group horizontal">
          <label>noFaks:</label>
          <input type="text" name="noFaks" value="<?php echo $row[11]; ?>"/>
        </div>
        <div class="form-group">
          <label>Message:</label>
          <textarea name="catatan" rows="4"><?php echo $row[17]; ?></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="UPDATE" />
        </div>
      </div>
    </form>
    <?php  
    } 
    ?> 
  </body>
</html>

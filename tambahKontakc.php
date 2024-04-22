<!DOCTYPE html>
<html>
  <head>
    <title>Kontak Bisnis</title>
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" /> -->
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
  <body class="container">
    <h2>Kontak Bisnis - MS Access</h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>Tambah Data Kontak Bisnis</h3>
    <form class="form-container" method="post" action="tambahKontak_aksic.php">
      <div class="form-column">
        <div class="form-group horizontal">
          <label>namaDepan:</label>
          <input type="text" name="namaDepan" />
        </div>
        <div class="form-group horizontal">
          <label>namaBelakang:</label>
          <input type="text" name="namaBelakang" />
        </div>
        <div class="form-group horizontal">
          <label>perusahaan:</label>
          <input type="text" name="perusahaan" />
        </div>
        <div class="form-group horizontal">
          <label>jabatan:</label>
          <input type="text" name="jabatan" />
        </div>
        <div class="form-group horizontal">
          <label>email:</label>
          <input type="text" name="email" />
        </div>
        <div class="form-group horizontal">
          <label>web:</label>
          <input type="text" name="web" />
        </div>
        <div class="form-group horizontal">
          <label>kategori:</label>
          <input type="text" name="kategori" />
        </div>
        <div class="form-group horizontal">
          <label>street:</label>
          <input type="text" name="street" />
        </div>
        <div class="form-group horizontal">
          <label>kota:</label>
          <input type="text" name="kota" />
        </div>
        <div class="form-group horizontal">
          <label>provinsi:</label>
          <input type="text" name="provinsi" />
        </div>
        <div class="form-group horizontal">
          <label>Kode Pos:</label>
          <input type="text" name="kodepos" />
        </div>
        <div class="form-group horizontal">
          <label>Negara:</label>
          <input type="text" name="negara" />
        </div>
      </div>
      <div class="form-column">
        <div class="form-group horizontal">
          <label>telpKantor:</label>
          <input type="text" name="telpKantor" />
        </div>
        <div class="form-group horizontal">
          <label>telpRumah:</label>
          <input type="text" name="telpRumah" />
        </div>
        <div class="form-group horizontal">
          <label>telpSeluler:</label>
          <input type="text" name="telpSeluler" />
        </div>
        <div class="form-group horizontal">
          <label>noFaks:</label>
          <input type="text" name="noFaks" />
        </div>
        <div class="form-group">
          <label>Message:</label>
          <textarea name="catatan" rows="4"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Tambah" />
        </div>
      </div>
    </form>
  </body>
</html>

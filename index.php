<!DOCTYPE html>
<html>

<head>
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
    <h2>Kontak Bisnis - MS Access</h2>
    <br />
    <a href="tambahKontakc.php">Tambah Kontak</a>
    <br />
    <table border='1' class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        include './connection.php';
        $no = 1;
        $sql = "SELECT id_kontak, nama_depan, nama_belakang, email FROM kontak ORDER BY id_kontak ASC";
        // $sql = "SELECT id_kontak, nama_depan, nama_belakang, email FROM kontak WHERE ID = 5";
        $result = $db_conn->query($sql);
        while ($row = $result->fetch()) {
        ?>
            <tr>
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td><?php echo $row[3] ?></td>
                <td>
                    <a href="editKontakc.php?id=<?php echo $row[0] ?>">Edit</a>
                    <a href="deleteKontak.php?id=<?php echo $row[0] ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        echo "</table>";
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
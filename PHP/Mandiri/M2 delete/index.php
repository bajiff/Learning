<?php
require "functions.php";
$db_uc = query("SELECT * FROM uji_coba");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Halaman Data Cahaya Surga</h1>
    <a href="tambah.php">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Actions</th>
            <th>Name</th>
            <th>Class</th>
            <th>Division</th>
            <th>Photo</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($db_uc as $uc): ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                <a href="update.php?=<?= $uc["id"]; ?>">Update</a> | 
                <a href="hapus.php?id=<?= $uc["id"]; ?>" onclick="return confirm('Yakin?');">Delete</a>
                </td>
                <td><?= $uc["nama"]; ?></td>
                <td><?= $uc["kelas"]; ?></td>
                <td><?= $uc["divisi"]; ?></td>
                <td><img src="img/<?= $uc["gambar"]; ?>" alt="Gambar" width="50"></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>
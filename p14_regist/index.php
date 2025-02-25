<?php
require("functions.php");
$db_cs = query("SELECT * FROM cahaya_surga ORDER BY id DESC");

if (isset($_POST["cari"])) {
    $db_cs= cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cahaya Surga</title>
</head>

<body>
    <h1 style="display:flex; ">Table Anggota Cahaya Surga</h1>
    <a href="tambah.php">Tambah Data</a>
    <br><br>
    <form action="" method="post">
        <label for="keyword">Search</label>
        <input type="text" name="keyword" id="keyword" size="25" placeholder="Masukan Keyword" autocomplete="off" autofocus >
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
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
        <?php foreach ($db_cs as $cs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $cs["id"]; ?>">Update</a>
                    <a href="hapus.php?id=<?= $cs["id"]; ?>" onclick="return confirm('Yakin gak?');">Delete</a>
                </td>
                <td><?= $cs["nama"]; ?></td>
                <td><?= $cs["kelas"]; ?></td>
                <td><?= $cs["divisi"]; ?></td>
                <td><img src="img/<?= $cs["gambar"]; ?>" alt="gambar" width="50"></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>
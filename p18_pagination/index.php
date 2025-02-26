<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require "functions.php";
// * Pagination

// * Konfigurasi
$jumlah_data_perhalaman = 3;
$jumlah_data = count(query("SELECT * FROM cahaya_surga"));
$jumlah_halaman = ceil($jumlah_data / $jumlah_data_perhalaman);
// * Halaman Aktif
$page = (isset($_GET["p"])) ? $_GET["p"] : 1;

// * Awal Data
// ? Semisal
// p = 1, $data_awal = 0
// p = 2, $data_awal = 3
// p = 3, $data_awal = 6
// p = 6, $data_awal = 

// $data_awal = ($jumlah_data_perhalaman * $page) - $jumlah_data_perhalaman;
$data_awal = ($jumlah_data_perhalaman * $page) - $jumlah_data_perhalaman;

$db_cs = query("SELECT * FROM cahaya_surga LIMIT $data_awal, $jumlah_data_perhalaman");
if (isset($_POST["cari"])) {
    $db_cs = cari($_POST["keyword"]);
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
    <a href="logout.php" onclick="return confirm('Yakin?');">Logout</a>
    <h1 style="display:flex; ">Table Anggota Cahaya Surga</h1>
    <a href="tambah.php">Tambah Data</a>
    <br><br>
    <form action="" method="post">
        <label for="keyword">Search</label>
        <input type="text" name="keyword" id="keyword" size="25" placeholder="Masukan Keyword" autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <p>Halaman</p>
    <?php if ($page > 1) : ?>
        <a href="?p=<?= $page - 1 ?>" style="font-size: xx-large;" e>&ltri;</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $jumlah_halaman; $i++) : ?>
        <?php if ($i == $page) : ?>
            <a href="?p=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?p=<?= $i; ?>" style="color: black;"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($page < $jumlah_halaman) : ?>
        <a href="?p=<?= $page + 1 ?>" style="font-size: xx-large;">&rtri;</a>
    <?php endif; ?>
    <br> <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nomor.</th>
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
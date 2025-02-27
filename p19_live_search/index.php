<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require("functions.php");
$db_cs = query("SELECT * FROM cahaya_surga ORDER BY id DESC");

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
        <button type="submit" name="cari" id="searchBtn">Cari</button>
    </form>
    <section id="container"></section>

    <script src="js/script.js"></script>
</body>

</html>
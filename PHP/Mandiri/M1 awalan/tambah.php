<?php
require "functions.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required>
        <br><br>
        <label for="kelas">Kelas : </label>
        <input type="text" name="kelas" id="kelas" required>
        <br><br>
        <label for="divisi">Divisi : </label>
        <input type="text" name="divisi" id="divisi" required>
        <br><br>
        <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" id="gambar">
        <br><br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>

</html>
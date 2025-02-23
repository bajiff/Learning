<?php
require "functions.php";
// Kita connect ke database dulu
if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>alert('Berhasil Ditambah'); document.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Gagal Ditambah'); document.location.href = 'tambah.php;</script>";
    };
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Anggota :D</h1>
    <br><br>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <br><br>
            <li>
                <label for="kelas">Kelas : </label>
                <select name="kelas" id="kelas">
                    <option value="7A">7A</option>
                    <option value="7B">7B</option>
                    <option value="7C">7C</option>
                    <option value="7D">7D</option>
                    <option value="7E">7E</option>
                    <option value="7F">7F</option>
                    <option value="7G">7G</option>
                    <option value="7H">7H</option>
                    <option value="7I">7I</option>
                    <option value="8A">8A</option>
                    <option value="8B">8B</option>
                    <option value="8C">8C</option>
                    <option value="8D">8D</option>
                    <option value="8E">8E</option>
                    <option value="8F">8F</option>
                    <option value="8G">8G</option>
                    <option value="8H">8H</option>
                    <option value="8I">8I</option>
                    <option value="9A">9A</option>
                    <option value="9B">9B</option>
                    <option value="9C">9C</option>
                    <option value="9D">9D</option>
                    <option value="9E">9E</option>
                    <option value="9F">9F</option>
                    <option value="9G">9G</option>
                    <option value="9H">9H</option>
                    <option value="9I">9I</option>
                </select>
            </li>
            <br><br>
            <li>
                <label for="divisi">Divisi : </label>
                <select name="divisi" id="divisi">
                    <option value="Hadroh">Hadroh</option>
                    <option value="Vokal">Vokal</option>
                    <option value="Bass">Bass</option>
                    <option value="Darbuka">Darbuka</option>
                    <option value="Keprak">Keprak</option>
                </select>

            </li>
            <br><br>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <br><br>
            <li><button type="submit" name="submit">Tambah</button></li>
            <br><br>
            <li><a href="index.php">Kembali</a></li>
        </ul>
    </form>
</body>

</html>
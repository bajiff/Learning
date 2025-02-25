tambah1 php?



<?php
// Koneksi ke database
$conn_cs = mysqli_connect("localhost", "root", "", "organisasi");

// Pastikan folder uploads ada
$upload_dir = "uploads/";
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $divisi = $_POST["divisi"];

    // Validasi file gambar
    $file_name = $_FILES["gambar"]["name"];
    $file_tmp = $_FILES["gambar"]["tmp_name"];
    $file_size = $_FILES["gambar"]["size"];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed_ext = ["jpg", "jpeg", "png"];

    // Cek apakah ekstensi file diperbolehkan
    if (!in_array($file_ext, $allowed_ext)) {
        echo "Error: Hanya file JPG dan PNG yang diperbolehkan!";
        exit;
    }

    // Cek ukuran file (maksimal 2MB)
    if ($file_size > 2 * 1024 * 1024) {
        echo "Error: Ukuran file maksimal 2MB!";
        exit;
    }

    // Buat nama unik untuk file
    $new_file_name = uniqid() . "." . $file_ext;
    $target_file = $upload_dir . $new_file_name;

    // Pindahkan file yang diunggah
    if (move_uploaded_file($file_tmp, $target_file)) {
        // Query insert data
        $query = "INSERT INTO cahaya_surga (id, nama, kelas, divisi, gambar) VALUES (NULL, '$nama', '$kelas', '$divisi', '$new_file_name')";
        mysqli_query($conn_cs, $query);

        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: Gagal mengunggah file!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul style="list-style-type: none;">
            <li>
                <label for="nama">Name : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="kelas">Class : </label>
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
            <li>
                <label for="divisi">Division : </label>
                <select name="divisi" id="divisi">
                    <option value="Hadroh">Hadroh</option>
                    <option value="Vokal">Vokal</option>
                    <option value="Bass">Bass</option>
                    <option value="Darbuka">Darbuka</option>
                    <option value="Keprak">Keprak</option>
                </select>
            </li>
            <li>
                <label for="gambar">Photo : </label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Tambah :D</button>
            </li>
            <br>
            <a href="index.php">Kembali :D</a>
        </ul>
    </form>
</body>

</html>
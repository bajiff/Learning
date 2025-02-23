<?php
$conn_cs = mysqli_connect("localhost", "root", "", "organisasi");

function query($query)
{
    global $conn_cs;
    $result = mysqli_query($conn_cs, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn_cs;
    $nama = mysqli_real_escape_string($conn_cs, htmlspecialchars($data["nama"]));
    $kelas = mysqli_real_escape_string($conn_cs, htmlspecialchars($data["kelas"]));
    $divisi = mysqli_real_escape_string($conn_cs, htmlspecialchars($data["divisi"]));

    // Upload Gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO cahaya_surga VALUES ('0', '$nama', '$kelas', '$divisi', '$gambar')";
    mysqli_query($conn_cs, $query);
    return mysqli_affected_rows($conn_cs);
}

function upload()
{
    $targetDir = "img/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = $_FILES['gambar']['name'];
    $fileSize = $_FILES['gambar']['size'];
    $fileTmp = $_FILES['gambar']['tmp_name'];
    $fileError = $_FILES['gambar']['error'];

    if ($fileError === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }
    

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Format gambar tidak valid! Hanya JPG, JPEG, dan PNG.');</script>";
        return false;
    }
    
    // Ukuran file 2mb
    if ($fileSize > 2 * 1024 * 1024) {
        echo "<script>alert('Ukuran gambar terlalu besar! Maksimal 2MB.');</script>";
        return false;
    }

    $newFileName = uniqid() . '.' . $ekstensiGambar;
    $targetFile = $targetDir . $newFileName;

    if (move_uploaded_file($fileTmp, $targetFile)) {
        return $newFileName;
    } else {
        echo "<script>alert('Gagal mengunggah gambar.');</script>";
        return false;
    }
}

function hapus($id)
{
    global $conn_cs;
    mysqli_query($conn_cs, "DELETE FROM cahaya_surga WHERE id = $id");

    return mysqli_affected_rows($conn_cs);
}


function ubah($data)
{
    global $conn_cs;
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $divisi = htmlspecialchars($data["divisi"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    // Check apakah user pilih gambar baru?
    if($_FILES['gambar']['error'] === 4 ){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE cahaya_surga SET
    nama = '$nama',
    kelas = '$kelas',
    divisi = '$divisi',
    gambar = '$gambar'
    WHERE id = $id
    ";
    mysqli_query($conn_cs, $query);
    return mysqli_affected_rows($conn_cs);
}

function cari($keyword)
{
    $query = "SELECT * FROM cahaya_surga WHERE
    nama LIKE '%$keyword%'
    OR kelas LIKE '%$keyword%'
    OR divisi LIKE '%$keyword%'
    ";
    return query($query);
}


function regist($data){
    global $conn_cs;
    $username = strtolower(stripslashes(mysqli_real_escape_string($conn_cs, htmlspecialchars($data["username"]))));
    $password = mysqli_real_escape_string($conn_cs, $data["password"]);
    $password2 = mysqli_real_escape_string($conn_cs, $data["password2"]);
    
    // Check username apakah tersedia atau belum?
    $result = mysqli_query($conn_cs, "SELECT * FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('Username Sudah Terdaftar')</script>";
        return false;
    }

    // Check Password
    if($password !== $password2){
        echo "<script>Konfirmasi Password Gagal</script>";
        return false;
    }

    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert Ke db
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn_cs, $query);
    return mysqli_affected_rows($conn_cs);

}
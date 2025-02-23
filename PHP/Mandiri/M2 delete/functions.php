<?php 
$conn_uc = mysqli_connect("localhost", "root", "", "organisasi");


function query($query){
    global $conn_uc;
    $result = mysqli_query($conn_uc, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
};

function tambah($data){
    global $conn_uc;
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $divisi = htmlspecialchars($data["divisi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO uji_coba VALUES
    ('0', '$nama', '$kelas', '$divisi', '$gambar')";
    mysqli_query($conn_uc,$query);
    return mysqli_affected_rows($conn_uc);
}

function hapus($id){
    global $conn_uc;
    mysqli_query($conn_uc, "DELETE FROM uji_coba WHERE id = $id");
    return mysqli_affected_rows($conn_uc);
}
?>
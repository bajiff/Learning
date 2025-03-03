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
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $divisi = htmlspecialchars($data["divisi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO cahaya_surga VALUES ('0', '$nama', '$kelas', '$divisi', '$gambar')";
    mysqli_query($conn_cs, $query);
    return mysqli_affected_rows($conn_cs);
}


function hapus($id)
{
    global $conn_cs;
    mysqli_query($conn_cs, "DELETE FROM cahaya_surga WHERE id = $id");
    
    return mysqli_affected_rows($conn_cs);
}

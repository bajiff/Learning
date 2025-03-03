<?php
$conn_cs = mysqli_connect("localhost", "root", "", "organisasi");
$query_cs = "SELECT * FROM cahaya_surga";
$result = mysqli_query($conn_cs, $query_cs);
if (!$result) {
    echo mysqli_error($conn_cs);
};
// var_dump($result);

// * Fetch data dari db organisasi
// ? mysqli_fetch_row(); hanya 1 row/baris [Array Numerik];
// $cs_fetch_row = mysqli_fetch_row($result);
// var_dump($cs_fetch_row);

// ? mysqli_fetch_array(); hanya 1 row/baris berbentuk array numerik dan associative
// $cs_fetch_array = mysqli_fetch_array($result);
// var_dump($cs_fetch_array);

// ? mysqli_fetch_asscoc(); hanya 1 row/baris array associative (array text) jangan make nomor
// $cs_fetch_assoc = mysqli_fetch_assoc($result);
// var_dump($cs_fetch_assoc["divisi"]);

// ? mysqli_fetch_object(); tidak direkomendasikan karena ribet :D
// $cs_fetch_object = mysqli_fetch_object($result);
// var_dump($cs_fetch_object);
// ! kita akan menggaunakan fetch assoc
// while($cs_fetch_assoc = mysqli_fetch_assoc($result)) {
// var_dump($cs_fetch_assoc);
// };



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="display:flex; ">Table Anggota Cahaya Surga</h1>
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
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><a href="#">Update</a> | <a href="#">Delete</a></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["kelas"]; ?></td>
                <td><?= $row["divisi"]; ?></td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt="photo" width="50"></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>
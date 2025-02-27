<?php

require "../functions.php";
$keyword = $_GET["keyword"];
$query = "SELECT * FROM cahaya_surga WHERE
    nama LIKE '%$keyword%'
    OR kelas LIKE '%$keyword%'
    OR divisi LIKE '%$keyword%'
    ";
$cahaya_surga = query($query);

?>
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
    <?php foreach ($cahaya_surga as $cs) : ?>
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
<?php
$friends = [
    ["Baji", "230511093", "TI23C", "Teknik Informatika"],
    ["Meki", "200511033", "TI23C", "Keperawatan"],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <!-- <ul>
        <?php foreach ($friends as $friend) : ?>
            <li><?= $friend; ?></li>
        <?php endforeach; ?>
    </ul> -->

    <?php foreach($friends as $friend) : ?>
        <ul>
            <li>Name: <?= $friend[0] ?></li>
            <li>NIM: <?= $friend[1] ?></li>
            <li>Class: <?= $friend[2] ?></li>
            <li>Major: <?= $friend[3] ?></li>
        </ul>
        <?php endforeach ?>
</body>

</html>
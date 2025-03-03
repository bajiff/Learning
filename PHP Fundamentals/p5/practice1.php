<?php
$mahasiswas = ["Aldi", "Baji", "Sentia", "Ica", "Hafidz", "Hikma", "etc"];
$students = ["Jeki", "Baji", "Meki", "Ulil", "Adit",];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div {
            width: 50px;
            height: 50px;
            display: block;
            align-items: center;
            background-color: red;
            color: white;
            float: left;
            padding: 10px;
            margin: 10px;
        }
    </style>
    <title>Belajar Array</title>
</head>

<body>
    <!-- <?php
            for ($i = 0; $i < count($mahasiswas); $i++) { ?>
    <div>
        <?= $mahasiswas[$i]; ?>
    </div>
    <?php } ?> -->

    <!-- <?php foreach ($mahasiswas as $key => $mahasiswa) { ?>
        <div>
            <?= $mahasiswa[$key]; ?> 
        </div>
        <?php } ?> -->

    <!-- <?php foreach ($mahasiswas as $mahasiswa) { ?>
            <div>
                <?= $mahasiswa; ?>
            </div>
            <?php } ?> -->


    <?php foreach ($students as $student) : ?>
        <div>
            <?= $student; ?>
        </div>
    <?php endforeach; ?>
</body>

</html>
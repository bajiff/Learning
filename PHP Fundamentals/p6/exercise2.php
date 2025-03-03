<?php
// $students = [
//     ["Baji Mawon", "230511093", "TI23C", "Teknik Informatika", "FT"],
//     ["Meki Mawon", "230511093", "TI23C", "Teknik Informatika", "FT"],
//     ["Jeki Mawon", "230511093", "TI23C", "Teknik Informatika", "FT"],
//     ["Penni Mawon", "230511093", "TI23C", "Teknik Informatika", "FT"],
//     ["Puki Mawon", "230511093", "TI23C", "Teknik Informatika", "FT"],
// ];

// * Belajar Array Associative yaitu array yang key nya kita buat sendiri
// ? Contoh $players = ["name" => "Meki", "nickName" => "MekiKun", "id" => "12312344",];
$users = [
    [
        "name" => "Baji",
        "nim" => "230511093",
        "class" => "TI23C",
        "major" => "Teknik Informatika",
        "faculty" => "FT",
        "task" => [100, 80, 88, 90],
        "image" => "a.png",
    ],
    [
        "name" => "Uji",
        "nim" => "230511093",
        "class" => "TI23C",
        "major" => "Teknik Informatika",
        "faculty" => "FT",
        "task" => [100, 80, 88, 90],
        "image" => "b.png",
    ],
    [
        "name" => "ILham",
        "nim" => "230511093",
        "class" => "TI23C",
        "major" => "Teknik Informatika",
        "faculty" => "FT",
        "task" => [100, 80, 88, 90],
        "image" => "c.png",
    ],
    [
        "name" => "Alwan",
        "nim" => "230511093",
        "class" => "TI23C",
        "major" => "Teknik Informatika",
        "faculty" => "FT",
        "task" => [100, 80, 88, 90],
        "image" => "d.png",
    ],
];

echo $users[1]["task"][0]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style-type: none;
            font-family: sans-serif;
            color: black;
        }

        .daftar {
            padding: 10px;
        }
    </style>
    <title>Latihan</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    // ! Tugas! ganti jangan data Mahasiswa, coba ke yang lain seperti film, buku, jurnal, mobil, motor dll
    <?php foreach ($users as $user) : ?>
        <ul class="daftar">
            <li><a href="#"><img src="images/<?= $user["image"] ?>" alt="" srcset=""></a></li>
            <li><a href="#"><?= $user['name'] ?></a></li>
            <li><a href="#"><?= $user['nim'] ?></a></li>
            <li><a href="#"><?= $user['class'] ?></a></li>
            <li><a href="#"><?= $user['major'] ?></a></li>
            <li><a href="#"><?= $user['faculty'] ?></a></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>
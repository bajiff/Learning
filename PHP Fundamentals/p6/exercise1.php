<?php
$angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9], [0]];
$color = false;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
    <style>
        .kotak {
            padding: 10px;
            margin: 10px;
            box-sizing: border-box;
            background-color: yellow;
            transition: all 1s ease-in-out;
            text-align: center;
            float: left;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>


    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $item) : ?>
            <div class="kotak">
                <?= $item ?>
            </div>
        <?php endforeach ?>
    <?php endforeach; ?>

    <div class="clear"></div>
    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $item) : ?>
            <div class="kotak">
                <?= $item ?>
            </div>
        <?php endforeach ?>
    <?php endforeach; ?>
</body>

</html>
<?php

if (!isset($_GET["brand"]) || !isset($_GET["model"]) || !isset($_GET["release_date"]) || !isset($_GET["price"])) {
    header("Location: info1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info2</title>
</head>

<body>
    <ul>
        <li><a href="#">Brand: <?= $_GET["brand"]; ?></a></li>
        <li><a href="#">Model: <?= $_GET["model"]; ?></a></li>
        <li><a href="#">Release Date: <?= $_GET["release_date"]; ?></a></li>
        <li><a href="#">Price: <?= $_GET["price"]; ?></a></li>
    </ul>
    <a href="info1.php">GO HOME</a>
</body>

</html>
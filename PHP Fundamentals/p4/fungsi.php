<?php 
function hello($time=10.00,$name="Jeki"){
    return "Sekarang jam $time, selamat datang $name ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Fungsi PHP</title>
</head>
<body>
    <h1>Hello <?= hello() ?></h1>
</body>
</html>
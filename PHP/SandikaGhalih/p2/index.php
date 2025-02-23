 <!-- <?php var_dump("Crot", 219, true)  ?>
<?php echo"Crot", 219, true  ?> 
<?php print false  ?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 2</title>
</head>
<body>

<?php 
$ayamRicaRica = 13000;
$mountoya = 3000;
$popcron = 2000;
$total = $ayamRicaRica + $mountoya + $popcron;
$bayar = var_dump($total > $ayamRicaRica && $popcron > $mountoya && $popcron % 2 == 0 );

?>
    <?php $nama = "Baji :D"; $umur = 20; $kesibukan = "Croding";  ?>
    <h1>Hello Perkenalkan nama saya <?php echo $nama;?> Umur: <?php echo  $umur;?> Kesibukan: <?php echo  $kesibukan;?> </h1>


</body>
</html>
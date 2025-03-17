<?php

require_once "App/init.php";
// $sendal = new Sendal("42", "Merah", 100000, 120, "Kayu", "Toyobo", 10);

// $baju = new Baju("L", "Blue Navy", 50000, 10, "Cotton", "Tugaina", 10);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($sendal);
// $cetakProduk->tambahProduk($baju);

// echo "<br>";

// echo $cetakProduk->cetak();
use App\Layanan\Users as LayananUsers;
use App\Produk\Users as ProdukUsers;
new ProdukUsers();
echo "<br>";
new LayananUsers();
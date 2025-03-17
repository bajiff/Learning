<?php
// require_once "Produk/Produk.php";
// require_once "Produk/InfoProduk.php";
// require_once "Produk/CetakInfoProduk.php";
// require_once "Produk/Sendal.php";
// require_once "Produk/Baju.php";
// require_once "Produk/Users.php";
// require_once "Services/Users.php";


spl_autoload_register(function($class){
    $class = explode("\\", $class);
    $class = end($class);
    require_once __DIR__ . "/Produk/" . $class . ".php";
});
spl_autoload_register(function($class){
    // App\Service\Users
    $class = explode("\\", $class);
    // Jadinya gini ["App", "Service", "Users"];
    $class = end($class);
    // Jadinya method end itu mengambil akhir index array yaitu ["Users"];
    require_once __DIR__ . "/Services/" . $class . ".php";
});
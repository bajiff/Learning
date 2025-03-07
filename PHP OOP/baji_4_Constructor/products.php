<?php
class Products {
    // Ada dua product yang ingin kita jual yaitu
    // * Sepatu & Sendal
    public $ukuran="40", $warna = "Kuning", $harga = 60000, $stok = "500", $bahan = "Stainless", $merk = "Basendals";
    public function getLabel(){
        return "$this->ukuran, $this->merk";
    }
}
// $sepatu = new Products();
// $sepatu->ukuran = "42";
// $sepatu->warna = "Hitam";
// var_dump($sepatu);
// $sendal = new Products();
// $sendal->ukuran = "40";
// $sendal->warna = "Kuning";
// var_dump($sendal);


$sendal = new Products();
$sendal->ukuran = "41";
$sendal->warna = "Kuning";
$sendal->harga = 65000;
$sendal->stok = 400;
$sendal->bahan = "Karet";
$sendal->merk = "Basendal";


$sepatu = new Products();
$sepatu->ukuran = "42";
$sepatu->warna = "Merah";
$sepatu->harga = 40000;
$sepatu->stok = 100;
$sepatu->bahan = "Kayu";
$sepatu->merk = "Koyogo";

echo "Sendal" . $sendal->getLabel();
echo "<br>";
echo "Sepatu" . $sepatu->getLabel();
<?php
require_once "Produk.php";
require_once "InfoProduk.php";
class Baju extends Produk implements InfoProduk
{
    public $kerahBaju;
    public function __construct($ukuran = "40", $warna = "Kuning", $harga = 100000, $stok = 100, $bahan = "Kayu", $merk = "Addidas", $kerahBaju = 0)
    {
        parent::__construct($ukuran, $warna, $harga, $stok, $bahan, $merk);

        $this->kerahBaju = $kerahBaju;
    }


    public function getInfoProduk()
    {
        $str = "Baju:" . $this->getInfo();
        return $str;
    }
    public function getInfo()
    {
        $str = "{$this->getLabel()},: {$this->warna}, Harga: {$this->harga}, Stok: {$this->stok}, Bahan: {$this->bahan}";

        return $str;
    }
}

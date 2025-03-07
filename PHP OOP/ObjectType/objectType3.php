<?php
class Products
{
    public $kategori, $ukuran, $warna, $harga, $stok, $bahan, $merk;

    public function __construct($kategori = "Baju", $ukuran = "40", $warna = "Kuning", $harga = 100000, $stok = 100, $bahan = "Kayu", $merk = "Addidas")
    {
        $this->kategori = $kategori;
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->bahan = $bahan;
        $this->merk = $merk;
    }
    public function getLabel()
    {
        return "$this->kategori,$this->ukuran,$this->warna, $this->harga, $this->stok, $this->bahan, $this->merk";
    }
}

class CetakInforProduk
{
    public function cetak(Products $produk)
    {
        $str = "{$produk->getLabel()}";
        return $str;
    }
}
$produk1 = new Products("Sendal", "41", "Kuning", 77000, 100, "Stainless", "Bapros");

$produk2 = new Products("Sepatu", "42", "Merah", 40000, 120, "Kayu", "Toyobo");

$produk3 = new Products("Baju", "L", "Blue Navy", 54000, 10, "Cotton", "Tugaina");



$infoProduk1 = new CetakInforProduk();
echo $infoProduk1->cetak($produk1);
echo "<br>";
$infoProduk2 = new CetakInforProduk();
echo $infoProduk2->cetak($produk2);
$infoProduk3 = new CetakInforProduk();
echo "<br>";
echo $infoProduk2->cetak($produk3);

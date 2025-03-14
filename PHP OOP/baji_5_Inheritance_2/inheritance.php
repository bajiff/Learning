<?php
class Produk
{

    public $ukuran, $warna, $harga, $stok, $bahan, $merk, $kerahBaju, $ketebalanSendal;

    public function __construct($ukuran = "40", $warna = "Kuning", $harga = 100000, $stok = 100, $bahan = "Kayu", $merk = "Addidas", $kerahBaju = 0, $ketebalanSendal = 0)
    {
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->bahan = $bahan;
        $this->merk = $merk;
        $this->kerahBaju = $kerahBaju;
        $this->ketebalanSendal = $ketebalanSendal;

    }
    public function getLabel()
    {
        return "Ukuran: $this->ukuran, Merk: $this->merk";
    }
    public function getInfoProduk()
    {
        // * Sendal : Ukuran, Merk, Warna, Harga, Stok, Bahan, KetebalanSendal
        $str = "{$this->getLabel()}, Warna: {$this->warna}, Harga: {$this->harga}, Stok: {$this->stok}, Bahan: {$this->bahan}";

        return $str;
    }
}
class CetakInfoProduk
{
    public function cetak(Produk $product)
    {
        $str = "{$product->getLabel()}, {$product->warna},{$product->harga}, {$product->stok}, {$product->bahan} ";
        return $str;
    }
}
class Sendal extends Produk
{
    public function getInfoProduk()
    {
        $str = "Sendal: {$this->getLabel()}, Warna: {$this->warna}, Harga: {$this->harga}, Stok {$this->stok}, Bahan: {$this->bahan}";
        return $str;
    }
}
class Baju extends Produk
{
    public function getInfoProduk()
    {
        $str = "Sendal: {$this->getLabel()}, Warna: {$this->warna}, Harga: {$this->harga}, Stok {$this->stok}, Bahan: {$this->bahan}";
        return $str;
    }
}


$sendal = new Sendal("42", "Merah", 40000, 120, "Kayu", "Toyobo", 0);

$baju = new Baju("L", "Blue Navy", 54000, 10, "Cotton", "Tugaina", 10);

echo $sendal->getInfoProduk();
echo "<br>";
echo $baju->getInfoProduk();

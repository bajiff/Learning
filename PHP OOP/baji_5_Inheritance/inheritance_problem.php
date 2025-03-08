<?php
class Produk
{

    public $ukuran, $warna, $harga, $stok, $bahan, $merk, $kerahBaju, $ketebalanSendal, $tipe;

    public function __construct($ukuran = "40", $warna = "Kuning", $harga = 100000, $stok = 100, $bahan = "Kayu", $merk = "Addidas", $kerahBaju = 0, $ketebalanSendal = 0, $tipe = "")
    {
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->bahan = $bahan;
        $this->merk = $merk;
        $this->kerahBaju = $kerahBaju;
        $this->ketebalanSendal = $ketebalanSendal;
        $this->tipe = $tipe;
    }
    public function getLabel()
    {
        return "Ukuran: $this->ukuran, Merk: $this->merk";
    }
    public function getInfoProduk()
    {
        // * Sendal : Ukuran, Merk, Warna, Harga, Stok, Bahan, KetebalanSendal
        $str = "Tipe: {$this->tipe}. {$this->getLabel()}, Warna: {$this->warna}, Harga: {$this->harga}, Stok: {$this->stok}, Bahan: {$this->bahan}";
        if ($this->tipe == "Sendal") {
            $str .= "- {$this->ketebalanSendal}";
        } else if ($this->tipe == "Baju") {
            $str .= "{$this->kerahBaju}";
        }
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


$sendal = new Produk("42", "Merah", 40000, 120, "Kayu", "Toyobo", 0, 5, "Sendal");

$baju = new Produk("L", "Blue Navy", 54000, 10, "Cotton", "Tugaina", 10, 0, "Baju");

echo $baju->getInfoProduk();

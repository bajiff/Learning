<?php
class Produk
{
    public $kategori, $ukuran, $warna, $bahan, $harga, $stok, $brand;


    public function __construct($kategori = "Kalung", $ukuran = "L", $warna = "Hijau", $bahan = "Semen", $harga = 300000, $stok = 10, $brand = "Ikea")
    {
        $this->kategori = $kategori;
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->bahan = $bahan;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->brand = $brand;
    }
    public function getLabel()
    {
        return "$this->kategori $this->brand";
    }
}

class CetakInformasiProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->getLabel()} | {$produk->ukuran}  {$produk->warna} {$produk->bahan} {$produk->harga} {$produk->stok}";
        return $str;
    }
}


$produk1 = new Produk("Gelang", "41", "Hitam", "Diamond", 3000, 30, "Phospor");

$cetakProduk1 = new CetakInformasiProduk();
echo $cetakProduk1->cetak($produk1);

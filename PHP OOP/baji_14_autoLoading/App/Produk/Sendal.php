<?php
class Sendal extends Produk implements InfoProduk
{
    public $ketebalanSendal;
    public function __construct($ukuran = '40', $warna = 'Kuning', $harga = 100000, $stok = 100, $bahan = 'Kayu', $merk = 'Addidas', $ketebalanSendal = 0)
    {
        parent::__construct($ukuran, $warna, $harga, $stok, $bahan, $merk);
        $this->ketebalanSendal = $ketebalanSendal;
    }

    public function getInfoProduk()
    {
        $str = "Sendal:" . $this->getInfo();
        return $str;
    }
    public function getInfo()
    {
        $str = "{$this->getLabel()},: {$this->warna}, Harga: {$this->harga}, Stok: {$this->stok}, Bahan: {$this->bahan}";

        return $str;
    }
}
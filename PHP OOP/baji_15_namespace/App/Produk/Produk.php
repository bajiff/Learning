<?php
abstract class Produk
{

    protected  $merk, $ukuran, $warna, $harga, $stok, $bahan, $diskon = 0;



    public function __construct($ukuran = "40", $warna = "Kuning", $harga = 100000, $stok = 100, $bahan = "Kayu", $merk = "Addidas")
    {
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->bahan = $bahan;
        $this->merk = $merk;
    }

    public function setMerk($merk)
    {
        $this->merk = $merk;
    }
    public function getMerk()
    {
        return $this->merk;
    }

    public function setUkuran($ukuran)
    {

        $this->ukuran = $ukuran;
    }
    public function getUkuran()
    {
        return $this->ukuran;
    }

    public function setWarna($warna)
    {

        $this->warna = $warna;
    }
    public function getWarna()
    {

        return $this->warna;
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }
    public function setHarga($harga)
    {

        $this->harga = $harga;
    }
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function setStok($stok)
    {

        $this->stok = $stok;
    }
    public function getStok()
    {

        return $this->stok;
    }
    public function setBahan($bahan)
    {

        $this->bahan = $bahan;
    }
    public function getBahan()
    {

        return $this->bahan;
    }

    public function getLabel()
    {
        return "Ukuran: $this->ukuran, Merk: $this->merk";
    }
    abstract public function getInfo();
}
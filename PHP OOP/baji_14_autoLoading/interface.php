<?php
interface InfoProduk
{
    public function getInfoProduk();
}
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

class CetakInfoProduk
{
    public $daftarProduk = [];
    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    {
        $str = "LIST PRODUK <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "{$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$sendal = new Sendal("42", "Merah", 100000, 120, "Kayu", "Toyobo", 10);

$baju = new Baju("L", "Blue Navy", 50000, 10, "Cotton", "Tugaina", 10);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($sendal);
$cetakProduk->tambahProduk($baju);

echo $cetakProduk->cetak();

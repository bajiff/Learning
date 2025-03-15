<?php
class Produk
{

    private  $merk, $ukuran, $warna, $harga, $stok, $bahan,$diskon = 0;
    


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

    public function getDiskon(){
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
    public function getInfoProduk()
    {
        $str = "{$this->getLabel()},: {$this->warna}, Harga: {$this->harga}, Stok: {$this->stok}, Bahan: {$this->bahan}";

        return $str;
    }
}

class Sendal extends Produk
{
    public $ketebalanSendal;
    public function __construct($ukuran = '40', $warna = 'Kuning', $harga = 100000, $stok = 100, $bahan = 'Kayu', $merk = 'Addidas', $ketebalanSendal = 0)
    {
        parent::__construct($ukuran, $warna, $harga, $stok, $bahan, $merk);
        $this->ketebalanSendal = $ketebalanSendal;
    }

    public function getInfoProduk()
    {
        $str = "Sendal:" . parent::getInfoProduk();
        return $str;
    }
}
class Baju extends Produk
{
    public $kerahBaju;
    public function __construct($ukuran = "40", $warna = "Kuning", $harga = 100000, $stok = 100, $bahan = "Kayu", $merk = "Addidas", $kerahBaju = 0)
    {
        parent::__construct($ukuran, $warna, $harga, $stok, $bahan, $merk);

        $this->kerahBaju = $kerahBaju;
    }


    public function getInfoProduk()
    {
        $str = "Baju:" . parent::getInfoProduk();
        return $str;
    }
}


$sendal = new Sendal("42", "Merah", 100000, 120, "Kayu", "Toyobo", 10);

$baju = new Baju("L", "Blue Navy", 50000, 10, "Cotton", "Tugaina", 10);

echo $sendal->getInfoProduk();
echo "<br>";
echo $baju->getInfoProduk();
echo "<hr>";

$baju->setDiskon(50);
$baju->setDiskon(88);
echo $baju->getDiskon();
echo "<hr>";
echo $baju->getHarga();
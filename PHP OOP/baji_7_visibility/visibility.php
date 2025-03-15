<?php
class Produk
{

    public $ukuran, $warna, $harga, $stok, $bahan;
    protected $diskon = 0;

    private $merk;

    public function __construct($ukuran = "40", $warna = "Kuning", $harga = 100000, $stok = 100, $bahan = "Kayu", $merk = "Addidas")
    {
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->bahan = $bahan;
        $this->merk = $merk;
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

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function getMerk(){
        return $this->merk;
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
    public function setDiskon($diskon)
    {
        return $this->diskon = $diskon;
    }
}


$sendal = new Sendal("42", "Merah", 100000, 120, "Kayu", "Toyobo", 10);

$baju = new Baju("L", "Blue Navy", 50000, 10, "Cotton", "Tugaina", 10);

echo $sendal->getInfoProduk();
echo "<br>";
echo $baju->getInfoProduk();
echo "<hr>";

$baju->setDiskon(50);
echo $baju->getHarga();
echo $baju->getMerk();
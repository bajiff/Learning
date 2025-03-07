<?php
class Products {
    // Ada dua product yang ingin kita jual yaitu
    // * Sepatu & Sendal
    public $ukuran="40", $warna = "Kuning", $harga = 60000, $stok = "500", $bahan = "Stainless", $merk = "Basendals";

    public function __construct($ukuran = "40", $warna = "Kuning", $harga = 100000, $stok = 100,$bahan = "Kayu",$merk = "Addidas") {
        $this->ukuran = $ukuran;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->bahan = $bahan;
        $this->merk = $merk;
    }
    public function getLabel(){
        return "$this->ukuran, $this->merk";
    }
}


$sendal = new Products("41","Kuning",77000,100,"Stainless","Basendals");


$sepatu = new Products("42","Merah",40000,120,"Kayu","Toyobo");

$baju = new Products("L", "Blue Navy", 54000,10,"Cotton", "Tugaina");

echo "Sendal: " . $sendal->getLabel();
echo "<br>";
echo "Sepatu: " . $sepatu->getLabel();
echo "<br>";

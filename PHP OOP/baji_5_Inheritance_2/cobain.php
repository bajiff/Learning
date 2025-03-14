<?php
class Mobil {
    public $nama, $merk, $warna, $harga;

    public function __construct($nama = "", $merk = "", $warna = "", $harga = 0){
        $this->nama = $nama;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
        
    }
    public function gas(){
        return "Gass";
    }
}

class MobilSport extends Mobil{
    public $turbo = false;

    public function onTurbo(){
        $this->turbo = true;
        return "Turbo Actived";
    }

    public function offTurbo(){
        $this->turbo = false;
        return "Turbo Unactived";
    }
}

$kijang = new MobilSport("Avanza","Toyota", "Kuning", 10000000);

echo $kijang->offTurbo();
var_dump($kijang);
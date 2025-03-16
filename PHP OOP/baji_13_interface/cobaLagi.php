<?php

interface Hewan
{
    public function makan();
    public function minum();
    public function lari();
    public function tidur($jam);
}
interface Aksesoris
{
    public function kalung($warna, $jenis, $harga, $brand);
}
class Anjing implements Hewan, Aksesoris
{
    protected $jam;
    protected $warna, $jenis, $harga, $brand;

    public function makan()
    {
        return "Selamat Makan <br>";
    }
    public function minum()
    {
        return "Selamat Minum <br>";
    }
    public function lari()
    {
        return "Selamat Lari <br>";
    }
    public function tidur($jam)
    {
        $this->jam = $jam;
    }
    public function kalung($warna, $jenis, $harga, $brand)
    {
        $this->warna = $warna;
        $this->jenis = $jenis;
        $this->harga = $harga;
        $this->brand = $brand;
    }
}

$bleki = new Anjing();
echo $bleki->makan();

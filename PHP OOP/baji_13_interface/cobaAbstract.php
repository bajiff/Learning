<?php
abstract class Buah
{
    abstract public function makan();

    public $daftarBuah = [];

    public function tambahBuah(Buah $buah)
    {
        $this->daftarBuah[] = $buah;
    }

    public function cetakBuah()
    {
        $str = "LIST BUAH <br>";
        foreach ($this->daftarBuah as $b) {
        }
        return $str;
    }
}


class Mangga extends Buah{
    public function makan(){
        return "Makan";
    }
}

$test = new Mangga();
echo $test->makan();

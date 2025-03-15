<?php

// class ContohStatic{
//     public static $player= "Player";
//     public static function helodek($helo){
//         return "Hello " . $helo . self::$player;
//     }
// }

// echo ContohStatic::$player;
// echo "<br>";
// echo ContohStatic::helodek("Udah Makan belum ");

class TanpaStatic{
    public static $numbers = 10;
    public static function  cobaHelo(){
        return "Hello," . self::$numbers++ . " Kali <br>";
    }
}
$coba = new TanpaStatic;
echo $coba->cobaHelo();
echo $coba->cobaHelo();
echo $coba->cobaHelo();
echo $coba->cobaHelo();
echo $coba->cobaHelo();

echo TanpaStatic::$numbers;
echo "<br>";
echo TanpaStatic::cobaHelo();

$coba2 = new TanpaStatic;
echo "<hr>";
echo $coba2->cobaHelo();
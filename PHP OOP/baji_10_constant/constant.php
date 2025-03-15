<?php
class Constant{
    const BELAJAR_CONST =  "Baji Belajar Const";
}

echo Constant::BELAJAR_CONST;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FILE__;


class Lancar{
    public static $dicoba = __CLASS__;
}

echo "<br>";
echo Lancar::$dicoba;
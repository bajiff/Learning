<?php
require_once "app/init.php";
use app\core\App as AppCore;
use app\core\Controller as ControllerCore;

$cobain = new AppCore();
echo $cobain->_construct();


echo "<br>";
$coba2 = new ControllerCore();
echo "<br>";
<?php 

// spl_autoload_register(function ($class) {
//     $class = explode("\\", $class);
//     $class = end($class);
//     require_once __DIR__ . "/controllers/" . $class . ".php";
// });


spl_autoload_register(function ($class) {
    $class = explode("\\", $class);
    $class = end($class);
    require_once __DIR__ . "/core/" . $class . ".php";
});
 
// spl_autoload_register(function ($class) {
//     $class = explode("\\", $class);
//     $class = end($class);
//     require_once __DIR__ . "/library" . $class . ".php";
// });

// spl_autoload_register(function ($class) {
//     $class = explode("\\", $class);
//     $class = end($class);
//     require_once __DIR__ . "models" . $class . ".php";
// });

// spl_autoload_register(function ($class) {
//     $class = explode("\\", $class);
//     $class = end($class);
//     require_once __DIR__ . "views" . $class . ".php";
// });
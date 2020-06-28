<?php

require_once "helpers.php";

spl_autoload_register(function($classname){
            if (file_exists("src/$classname.php")) {
                require "src/$classname.php";
            }
});

$car = new Ferrari();
$car->Encender();

$car->SetGas(1000);
$car->Conducir(100);
$car->Conducir(500);
$car->Conducir(400);
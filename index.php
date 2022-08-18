<?php

use Qu4k3r\Pdi;
use Qu4k3r\Pdi\App\Principles\SOLID\O\ResidenceFactory;
use Qu4k3r\Pdi\App\Principles\SOLID\O\ResidenceType;

include_once "vendor/autoload.php";

try {
    $house = ResidenceFactory::create(ResidenceType::House);
    var_dump($house);
    echo PHP_EOL;
    $apartment = ResidenceFactory::create(ResidenceType::Apartment);
    var_dump($apartment);
    echo PHP_EOL;
    $motorHome = ResidenceFactory::create(ResidenceType::MotorHome);
    var_dump($motorHome);
    echo PHP_EOL;
} catch (\Exception $e) {
    echo $e->getMessage();
}

$motorHome = new MotorHome();
$motorHome->pagarIptu();

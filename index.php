<?php

use Qu4k3r\Pdi;
use Qu4k3r\Pdi\App\Principles\SOLID\House;

include_once "vendor/autoload.php";

$house = new House('John Doe');

echo $house;

$house->createRoom('Living Room');
$house->buyHouseObject('Table');
$house->buyHouseObject('Chair');
$house->buyHouseObject('Couch');
$house->showFurniture();
$house->arrangeFurniture();
$house->showFurniture();

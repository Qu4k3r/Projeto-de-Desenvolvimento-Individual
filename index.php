<?php

use Qu4k3r\Pdi;

include_once "vendor/autoload.php";




$house = new Pdi\App\Principles\SOLID\D\House();
$house->createRoom(Room, 'Living Room');
$house->createRoom(Room, 'Bathroom');
$house->createRoom(Room, 'Bedroom');

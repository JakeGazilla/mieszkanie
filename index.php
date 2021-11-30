<?php

require_once __DIR__ . './vendor/autoload.php';
use app\core\Room;
use app\core\RoomType;
use app\core\Apartment;

$room1 = new Room();
$room1->setA(2);
$room1->setB(4);
$room1->setType('attic');
$room1->setWindowsCount(3);
$room1->setDoorsCount(2);

$room2 = new Room();
$room2->setA(2);
$room2->setB(4);
$room2->setType('kitchen');
$room2->setWindowsCount(3);
$room2->setDoorsCount(2);

$room3 = new Room();
$room3->setA(2);
$room3->setB(4);
$room3->setType('living room');
$room3->setWindowsCount(3);
$room3->setDoorsCount(2);


$apartment = new Apartment();
echo $apartment->addRoom($room1) . '<br>';
echo $apartment->addRoom($room2) . '<br>';
echo $apartment->addRoom($room3) . '<br>';


$totalArea = $apartment->calcArea();
$totalWindowsCount = $apartment->totalWindowsCount('kitchen');
$totalDoorsCount = $apartment->totalDoorsCount('kitchen');
$totalTechnicalArea = $apartment->calcArea('technical');
$livingRoomArea = $apartment->calcArea('living room');

// Output
echo $totalArea . '<br>';
echo $totalWindowsCount . '<br>';
echo $totalDoorsCount . '<br>';
echo $totalTechnicalArea . '<br>';
echo $livingRoomArea . '<br>';




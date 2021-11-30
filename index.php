<?php

require_once __DIR__ . './vendor/autoload.php';

use app\core\Bathroom;
use app\core\Bedroom;
use app\core\Kitchen;
use app\core\LivingRoom;
use app\core\Room;
use app\core\Apartment;

$room1 = new Room();
$room1->setA(2);
$room1->setB(4);
$room1->setType('attic');
$room1->setWindowsCount(3);
$room1->setDoorsCount(2);

$room2 = new Kitchen();
$room2->setA(2);
$room2->setB(4);
$room2->setWindowsCount(3);
$room2->setDoorsCount(10);

$room3 = new LivingRoom();
$room3->setA(2);
$room3->setB(4);
$room3->setWindowsCount(3);
$room3->setDoorsCount(2);

$room4 = new Bathroom();
$room4->setA(2);
$room4->setB(4);
$room4->setWindowsCount(3);
$room4->setDoorsCount(2);

$room5 = new Bedroom();
$room5->setA(2);
$room5->setB(4);
$room5->setWindowsCount(3);
$room5->setDoorsCount(2);


$apartment = new Apartment();
$statusOfRooms = [];
$statusOfRooms[] = $apartment->addRoom($room1) . '<br>';
$statusOfRooms[] = $apartment->addRoom($room2) . '<br>';
$statusOfRooms[] = $apartment->addRoom($room3) . '<br>';
$statusOfRooms[] = $apartment->addRoom($room4) . '<br>';
$statusOfRooms[] = $apartment->addRoom($room5) . '<br>';

foreach ($statusOfRooms as $status) {
    if ($status == 1) {
        echo 'Room Added' . '<br>';
    } else {
        echo 'Wrong type of room' . '<br>';
    }
}


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




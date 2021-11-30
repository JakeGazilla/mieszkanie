<?php


use app\core\Apartment\Apartment;
use app\core\Apartment\ApartmentSmall;
use app\core\Room\Attic;
use app\core\Room\Bathroom;
use app\core\Room\Bedroom;
use app\core\Room\Kitchen;
use app\core\Room\LivingRoom;
use app\core\Room\Room;

require_once __DIR__ . './vendor/autoload.php';



// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// =============================== GENERIC APARTMENT =====================================
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// Set rooms for generic Apartment Class

echo "<h1>Generic Apartment</h1>";

$room1 = new Attic();
$room1->setA(5);
$room1->setB(4);
$room1->setWindowsCount(3);
$room1->setDoorsCount(2);

$room2 = new Kitchen();
$room2->setA(5);
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

$room5 = new Attic();
$room5->setA(2);
$room5->setB(4);
$room5->setWindowsCount(3);
$room5->setDoorsCount(2);

// Instantiate generic Apartment and display its features
$apartment = new Apartment();

// Rooms added to $apartment
echo "<h2>Rooms added to Apartment</h2>";

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

// $apartment features
echo "<h2>Generic Apartment features:</h2>";

$totalArea = $apartment->calcArea();
$totalWindowsCount = $apartment->totalWindowsCount('kitchen');
$totalDoorsCount = $apartment->totalDoorsCount('kitchen');
$totalAreaOfRoomType1 = $apartment->calcArea('bathroom');
$totalAreaOfRoomType2 = $apartment->calcArea('livingroom');

// Output generic Apartment
echo 'Total area: '. $totalArea . '<br>';
echo 'Widnows count: '. $totalWindowsCount . '<br>';
echo 'Door count: '. $totalDoorsCount . '<br>';
echo 'Total area of type 1: '. $totalAreaOfRoomType1 . '<br>';
echo 'Total area of type 2: '. $totalAreaOfRoomType2 . '<br>';

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// =============================== SMALL APARTMENT =====================================
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

echo "<br>";
echo "<hr>";
echo "<h1>Small Apartment</h1>";

// Set rooms for Apartment small
$smallRoom1 = new Room();
$smallRoom1->setA(2);
$smallRoom1->setB(4);
$smallRoom1->setWindowsCount(3);
$smallRoom1->setDoorsCount(2);

$smallRoom2 = new Kitchen();
$smallRoom2->setA(2);
$smallRoom2->setB(4);
$smallRoom2->setWindowsCount(3);
$smallRoom2->setDoorsCount(10);

$smallRoom3 = new LivingRoom();
$smallRoom3->setA(2);
$smallRoom3->setB(4);
$smallRoom3->setWindowsCount(3);
$smallRoom3->setDoorsCount(2);

$smallRoom4 = new BathRoom();
$smallRoom4->setA(2);
$smallRoom4->setB(4);
$smallRoom4->setWindowsCount(3);
$smallRoom4->setDoorsCount(2);

$smallRoom5 = new BedRoom();
$smallRoom5->setA(2);
$smallRoom5->setB(4);
$smallRoom5->setWindowsCount(3);
$smallRoom5->setDoorsCount(2);

// Instantiate small Apartment and display its features
$smallApartment = new ApartmentSmall();

// Rooms added to $apartment
echo "<h2>Rooms added to Small Apartment</h2>";

$smallApartmentStatusOfRooms = [];
$smallApartmentStatusOfRooms[] = $smallApartment->addRoom($smallRoom1) . '<br>';
$smallApartmentStatusOfRooms[] = $smallApartment->addRoom($smallRoom2) . '<br>';
$smallApartmentStatusOfRooms[] = $smallApartment->addRoom($smallRoom3) . '<br>';
$smallApartmentStatusOfRooms[] = $smallApartment->addRoom($smallRoom4) . '<br>';
$smallApartmentStatusOfRooms[] = $smallApartment->addRoom($smallRoom5) . '<br>';

foreach ($smallApartmentStatusOfRooms as $status) {
    if ($status == 1) {
        echo 'Room Added' . '<br>';
    } else {
        echo 'Wrong type of room' . '<br>';
    }
}
// $apartment features
echo "<h2>Small Apartment features:</h2>";

$smallApartmenttotalArea = $smallApartment->calcArea();
$smallApartmenttotalWindowsCount = $smallApartment->totalWindowsCount('kitchen');
$smallApartmenttotalDoorsCount = $smallApartment->totalDoorsCount('kitchen');
$smallApartmenttotalAreaOfRoomType1 = $smallApartment->calcArea('bathroom');
$smallApartmenttotalAreaOfRoomType2 = $smallApartment->calcArea('livingroom');

// Output generic Apartment
echo 'Total area: '. $smallApartmenttotalArea . '<br>';
echo 'Widnows count: '. $smallApartmenttotalWindowsCount . '<br>';
echo 'Door count: '. $smallApartmenttotalDoorsCount . '<br>';
echo 'Total area of type 1: '. $smallApartmenttotalAreaOfRoomType1 . '<br>';
echo 'Total area of type 2: '. $smallApartmenttotalAreaOfRoomType2 . '<br>';






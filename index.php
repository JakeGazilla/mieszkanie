<?php

use app\Database;

class Room
{
    protected float $a;
    protected float $b;
    protected ?string $type;
    protected $windowsCount;
    protected $doorsCount;

    public function calcArea()
    {
        return $this->a * $this->b;
    }

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @param float $a
     */
    public function setA(float $a): void
    {
        $this->a = $a;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @param float $b
     */
    public function setB(float $b): void
    {
        $this->b = $b;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getWindowsCount()
    {
        return $this->windowsCount;
    }

    /**
     * @param mixed $windowsCount
     */
    public function setWindowsCount($windowsCount): void
    {
        $this->windowsCount = $windowsCount;
    }

    /**
     * @return mixed
     */
    public function getDoorsCount()
    {
        return $this->doorsCount;
    }

    /**
     * @param mixed $doorsCount
     */
    public function setDoorsCount($doorsCount): void
    {
        $this->doorsCount = $doorsCount;
    }
}

class Apartment
{
    private $rooms = [];
    protected RoomType $roomType;

    public function __construct()
    {
        $this->roomType = new RoomType();
    }

    public function addRoom(Room $room)
    {
        $givenType = $room->getType();
        if($this->roomType->checkType($givenType)) {
            echo "Room added" . "<br>";
            $this->rooms[] = $room;
        } else {
            echo 'Cannot add the room. Wrong type.' . '<br>';
        }
    }

    function calcArea(string $type = null)
    {
        $area = 0;
        $rooms = $this->getRooms();
        foreach ($rooms as $room)
            if (null===$type || ($type && $type === $room->getType()))
                $area += $room->calcArea();

        return $area;
    }

    function totalWindowsCount(string $type)
    {
        $windowCount = 0;
        $rooms = $this->getRooms();
        /** @var Room $room */
        foreach ($rooms as $room)
            if (null===$type || ($type && $type === $room->getType()))
                $windowCount += $room->getWindowsCount();
        return $windowCount;
    }

    function totalDoorsCount(string $type)
    {
        $windowCount = 0;
        $rooms = $this->getRooms();
        /** @var Room $room */
        foreach ($rooms as $room)
            if (null===$type || ($type && $type === $room->getType()))
                $windowCount += $room->getDoorsCount();
        return $windowCount;
    }

    /**
     * @return array
     */
    public function getRooms(): array
    {
        return $this->rooms;
    }

    /**
     * @param array $rooms
     */
    public function setRooms(array $rooms): void
    {
        $this->rooms = $rooms;
    }
}

class RoomType
{
    protected $types =
    [
      'kitchen',
      'toilet',
      'living room',
      'balcony',
      'bedroom'
    ];

    public function checkType($type)
    {
        if(in_array($type, $this->types)) {
            return true;
        } else {
            return false;
        }
    }
}




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
$apartment->addRoom($room1);
$apartment->addRoom($room2);
$apartment->addRoom($room3);


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




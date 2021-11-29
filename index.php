<?php

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

    public function addRoom(Room $room)
    {
        $this->rooms[] = $room;
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

$kitchen = new Room();
$kitchen->setA(2);
$kitchen->setB(4);
$kitchen->setType('kitchen');
$kitchen->setWindowsCount(3);
$kitchen->setDoorsCount(2);

$kitchen1 = new Room();
$kitchen1->setA(2);
$kitchen1->setB(4);
$kitchen1->setType('kitchen');
$kitchen1->setWindowsCount(3);
$kitchen1->setDoorsCount(2);


$apartment = new Apartment();
$apartment->addRoom($kitchen);
$apartment->addRoom($kitchen1);


$totalArea = $apartment->calcArea();
$totalWindowsCount = $apartment->totalWindowsCount('kitchen');
$totalDoorsCount = $apartment->totalDoorsCount('kitchen');
$totalTechnicalArea = $apartment->calcArea('technical');
$livingRoomArea = $apartment->calcArea('living');

// Output
echo $totalArea . '<br>';
echo $totalWindowsCount . '<br>';
echo $totalDoorsCount . '<br>';




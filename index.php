<?php

class Room
{
    protected float $a;
    protected float $b;
    public ?string $type;

    function __construct(float $a, float $b, string $type = null
    )
    {
        $this->a = $a;
        $this->b = $b;
        $this->type = $type;
    }

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

$kitchen = new Room(3, 5, 'sanitary');
$kitchen2 = new Room(3, 5, 'technical');
$kitchen3 = new Room(3, 5, 'technical');
$livingRoom = new Room(5, 5, 'living');
$livingRoom2 = new Room(5, 5, 'living');

$apartment = new Apartment();
$apartment->addRoom($kitchen);
$apartment->addRoom($kitchen2);
$apartment->addRoom($kitchen3);
$apartment->addRoom($livingRoom);
$apartment->addRoom($livingRoom2);

$totalArea = $apartment->calcArea();
$totalTechnicalArea = $apartment->calcArea('technical');
$livingRoomArea = $apartment->calcArea('living');




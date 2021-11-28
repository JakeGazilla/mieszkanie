<?php

class Room
{
    protected float $a;
    protected float $b;
    protected float $dimensions;
    public ?string $type;

    function __construct(
        $a,
        $b,
        $type = null
    ) {
        $this->a = $a;
        $this->b = $b;
        $this->type = $type;
        $this->dimensions = $a * $b;
    }

    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @return mixed|string|null
     */
    public function getType()
    {
        return $this->type;
    }



}

class Apartment
{
    private $rooms = [];

    public function addRoom(Room $room)
    {
        $this->rooms[] = $room;
    }

    public function outputEntireArea()
    {
        $output = "";
        $i = 1;
        foreach ($this->rooms as $single_room) {
            $output .= "<p>Room $i: \n";
            $output .= "Dimensions of: ";
            $output .= "{$single_room->getA()} * ";
            $output .= $single_room->getB();
            $output .= " ({$single_room->getDimensions()}) \n</p>";
            $i++;
        }
        print $output;
    }

    public function outputEntireAreaForTypeOfRoom(string $type)
    {
        $output = "";
        $i = 1;

        foreach ($this->rooms as $single_room) {
//            echo var_dump($single_room) . "<br>";
//            echo $single_room->getType();
//            echo $type;
            if (strcasecmp($type, $single_room->getType())) {
                $output .= "<p>Room $i: \n";
                $output .= "Dimensions of: ";
                $output .= "{$single_room->getA()} * ";
                $output .= $single_room->getB();
                $output .= " ({$single_room->getDimensions()}) \n</p>";
                $i++;
            } else {
                $output = "No rooms fo' such type in the apartment, nigga";
            }
        }
        print $output;
    }
}

///////////////////////////////// Output

// Single room
$kitchen = new Room(3,5, 'balcony');
$livingroom = new Room(7,5);
$balcony = new Room(1.5,5);

echo $kitchen->getDimensions();
echo '<br>';

// Read all rooms in apartment_1
$apartment_1 = new Apartment();
$apartment_1->addRoom($kitchen);
$apartment_1->addRoom($livingroom);
$apartment_1->addRoom($balcony);

//$apartment_1->outputEntireArea();
$apartment_1->outputEntireAreaForTypeOfRoom('balcony');




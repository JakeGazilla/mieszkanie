<?php

namespace app\core\Apartment;

use app\core\Room\Room;

class Apartment
{
    private array $rooms = [];
    private array $roomTypes;

 
    public function __construct()
    {
    }


    public function checkType(Room $room): bool
    {
       return in_array(get_class($room), $this->roomTypes) ;
    }

    public function addRoom(Room $room)
    {
        if($this->checkType($room)) return false;
        
        $this->rooms[] = $room;
        
        return true;        
    }

    function calcArea(string $type = null)
    {
        $area = 0;
        foreach ($this->getRooms() as $room)
            if (null===$type || ($type && $type === $room->getType()))
                $area += $room->calcArea();

        return $area;
    }

    function totalWindowsCount(string $type)
    {
        $windowCount = 0;
        /** @var Room $room */
        foreach ($this->getRooms() as $room)
            if (null===$type || ($type && $type === $room->getType()))
                $windowCount += $room->getWindowsCount();
        
        return $windowCount;
    }

    function totalDoorsCount(string $type)
    {
        $windowCount = 0; 
        /** @var Room $room */
        foreach ($this->getRooms() as $room)
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

    /**
     * @param array $roomTypes
     */
    public function setRoomTypes(array $roomTypes): void
    {
        $this->roomTypes = $roomTypes;
    }


}

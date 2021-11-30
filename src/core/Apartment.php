<?php

namespace app\core;

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
            $this->rooms[] = $room;
            return 'Room added.';
        } else {
            return 'Error. Cannot add room. Wrong type.';
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
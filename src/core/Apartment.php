<?php

namespace app\core;

class Apartment
{
    private $rooms = [];
    protected $roomTypes =
        [
            'kitchen',
            'toilet',
            'living room',
            'balcony',
            'bedroom'
        ];

    public function checkType($type)
    {
        if(in_array($type, $this->roomTypes)) {
            return true;
        } else {
            return false;
        }
    }

    public function addRoom(Room $room)
    {
        $givenType = $room->getType();
        if($this->checkType($givenType)) {
            $this->rooms[] = $room;
            return true;
        } else {
            return false;
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
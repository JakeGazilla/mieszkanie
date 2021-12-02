<?php

namespace app\core\Apartment;

use app\core\Models\Model;
use app\core\Room\Room;

class Apartment
{
    private $rooms = [];
    public $model;

    /**
     * @param Model $model
     */
    public function __construct()
    {
        $this->model = new Model();
    }


    public function checkType(Room $room)
    {
        $roomTypes = $this->model->getRoomList();
        $type = get_class($room);
        if(in_array($type, $roomTypes)) {
            return true;
        } else {
            return false;
        }
    }

    public function addRoom(Room $room)
    {
        if($this->checkType($room)) {
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
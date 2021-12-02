<?php

namespace app\core\Models;

class Model
{
    private $roomTypes = [];

    /**
     * @param array $roomTypes
     */
    public function __construct(array $roomTypes = [])
    {
        $this->roomTypes = $roomTypes;
    }


    public function getRoomList()
    {
        return $this->roomTypes;
    }

    /**
     * @param array $roomTypes
     */
    public function setRoomTypes(array $roomTypes): void
    {
        $this->roomTypes = $roomTypes;
    }



}
<?php

namespace app\core\Models;

class Model
{
    private $roomTypes = [
        'app\core\Room\Room',
        'app\core\Room\Kitchen',
        'app\core\Room\Toilet',
        'app\core\Room\Livingroom',
        'app\core\Room\Bathroom',
        'app\core\Room\Bedroom'
    ];
    public function getRoomList()
    {
        return $this->roomTypes;
    }
}
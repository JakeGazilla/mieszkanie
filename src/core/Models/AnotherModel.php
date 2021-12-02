<?php

namespace app\core\Models;

class AnotherModel extends Model
{
    private $roomTypes = [
        'app\core\Room\Room',
        'app\core\Room\Kitchen',
        'app\core\Room\Toilet',
    ];

    public function getRoomList()
    {
        return $this->roomTypes;
    }
}
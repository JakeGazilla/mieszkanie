<?php

namespace app\core\Apartment;

use app\core\Room\Room;

trait ApartmentTrait
{
    protected $roomTypes =
        [
            'app\core\Room\Room',
            'app\core\Room\Kitchen',
            'app\core\Room\Toilet',
            'app\core\Room\Livingroom',
            'app\core\Room\Bathroom',
            'app\core\Room\Bedroom'
        ];


}
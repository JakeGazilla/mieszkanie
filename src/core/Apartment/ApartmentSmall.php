<?php

namespace app\core\Apartment;

class ApartmentSmall extends Apartment
{
    protected $roomTypes =
        [
            'app\core\Room\Kitchen',
            'app\core\Room\Bedroom',
            'app\core\Room\Toilet',
        ];

}
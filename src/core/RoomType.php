<?php

namespace app\core;

class RoomType
{
    protected $types =
        [
            'kitchen',
            'toilet',
            'living room',
            'balcony',
            'bedroom'
        ];

    public function checkType($type)
    {
        if(in_array($type, $this->types)) {
            return true;
        } else {
            return false;
        }
    }
}
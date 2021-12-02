<?php

namespace app\core\Apartment;

use app\core\Models\AnotherModel;

class ApartmentSmall extends Apartment
{
    /**
     * @param Model $model
     */
    public function __construct()
    {
        $this->model = new AnotherModel();
    }
}
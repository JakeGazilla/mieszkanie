<?php

namespace app\core;

class Bathroom extends Room
{
    protected ?string $type = 'bathroom';

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
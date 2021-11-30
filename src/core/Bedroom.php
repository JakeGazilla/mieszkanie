<?php

namespace app\core;

class Bedroom extends Room
{
    protected ?string $type = 'bedroom';

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
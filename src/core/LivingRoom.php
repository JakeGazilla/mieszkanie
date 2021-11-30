<?php

namespace app\core;

class LivingRoom extends Room
{
    protected ?string $type = 'living room';

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
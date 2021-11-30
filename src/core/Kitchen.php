<?php

namespace app\core;

class Kitchen extends Room
{
    protected ?string $type = 'kitchen';

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }


}
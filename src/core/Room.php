<?php

namespace app\core;

class Room
{
    protected float $a;
    protected float $b;
    protected ?string $type;
    protected $windowsCount;
    protected $doorsCount;

    public function calcArea()
    {
        return $this->a * $this->b;
    }

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @param float $a
     */
    public function setA(float $a): void
    {
        $this->a = $a;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @param float $b
     */
    public function setB(float $b): void
    {
        $this->b = $b;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getWindowsCount()
    {
        return $this->windowsCount;
    }

    /**
     * @param mixed $windowsCount
     */
    public function setWindowsCount($windowsCount): void
    {
        $this->windowsCount = $windowsCount;
    }

    /**
     * @return mixed
     */
    public function getDoorsCount()
    {
        return $this->doorsCount;
    }

    /**
     * @param mixed $doorsCount
     */
    public function setDoorsCount($doorsCount): void
    {
        $this->doorsCount = $doorsCount;
    }
}
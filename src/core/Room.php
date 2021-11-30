<?php

namespace app\core;

class Room
{
    protected float $a;
    protected float $b;
    protected $windowsCount;
    protected $doorsCount;

    public function calcArea()
    {
        return $this->a * $this->b;
    }

    public function getType()
    {
        $type = explode('\\', get_class($this));
        $type = array_pop($type);
        $type = strtolower($type);
        return $type;
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
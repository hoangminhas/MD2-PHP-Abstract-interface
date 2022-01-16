<?php

class Circle
{
    public int $radius;
    public string $name;

    /**
     * @param float|int $radius
     * @param string $name
     */
    public function __construct(int $radius, string $name)
    {
        $this->radius = $radius;
        $this->name = $name;
    }

    /**
     * @return float|int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param float|int $radius
     */
    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}
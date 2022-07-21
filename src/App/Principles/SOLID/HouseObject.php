<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID;

class HouseObject implements HouseObjectInterface
{
    private string $name;
    private float $height;
    private float $width;
    private float $weight;

    /**
     * @param string $name
     * @param float $height
     * @param float $width
     * @param float $weight
     */
    public function __construct(string $name, float $height, float $width, float $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->width = $width;
        $this->weight = $weight;
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

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }
}

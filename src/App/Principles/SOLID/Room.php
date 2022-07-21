<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID;

class Room implements RoomInterface
{
    private string $name;
    private float $height;
    private float $width;
    private float $depth;

    /**
     * @param string $name
     * @param float $height
     * @param float $width
     * @param float $depth
     */
    public function __construct(string $name, float $height, float $width, float $depth)
    {
        $this->name = $name;
        $this->height = $height;
        $this->width = $width;
        $this->depth = $depth;
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
    public function getDepth(): float
    {
        return $this->depth;
    }

    /**
     * @param float $depth
     */
    public function setDepth(float $depth): void
    {
        $this->depth = $depth;
    }
}

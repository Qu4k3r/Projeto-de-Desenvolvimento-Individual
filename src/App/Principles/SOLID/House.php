<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID;

class House
{
    private Resident $resident;
    private array $furniture;
    private array $rooms;

    /**
     * @param Resident $resident
     * @param array $furniture
     * @param array $rooms
     */
    public function __construct(Resident $resident, array $furniture = [], array $rooms = [])
    {
        $this->resident = $resident;
        $this->furniture = $furniture;
        $this->rooms = $rooms;
    }

    public function getFurniture(): array
    {
        return $this->furniture;
    }

    public function getRooms(): array
    {
        return $this->rooms;
    }

    public function getTotalRooms(): int
    {
        return count($this->getRooms());
    }

    public function getTotalFurniture(): int
    {
        return count($this->getFurniture());
    }
}

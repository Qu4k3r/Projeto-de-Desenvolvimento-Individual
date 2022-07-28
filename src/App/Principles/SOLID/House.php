<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID;

class House
{
    private string $resident;
    private array $furniture;
    private array $rooms;

    public function __construct(string $resident, array $furniture = [], array $rooms = [])
    {
        $this->resident = $resident;
        $this->furniture = $furniture;
        $this->rooms = $rooms;
    }

    public function __toString()
    {
        return "This house belongs to {$this->getResident()}" . PHP_EOL
            . "It has a total of {$this->getTotalFurniture()} pieces of furniture and {$this->getTotalRooms()} rooms" . PHP_EOL;
    }

    public function getResident(): string
    {
        return $this->resident;
    }

    public function setResident(string $resident): void
    {
        $this->resident = $resident;
    }

    public function getFurniture(): array
    {
        return $this->furniture;
    }

    public function setFurniture(array $furniture): void
    {
        $this->furniture = $furniture;
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

    public function createRoom(string $roomName): void
    {
        $this->rooms[] = $roomName;
        echo $this->getResident() . " just created a new room: $roomName" . PHP_EOL;
    }

    public function buyHouseObject(string $objectName): void
    {
        $this->furniture[] = $objectName;
        echo $this->getResident() . " just bought a new house object: $objectName" . PHP_EOL;
    }

    public function arrangeFurniture(): void
    {
        $furniture = $this->getFurniture();
        sort($furniture, SORT_STRING | SORT_FLAG_CASE);
        $this->setFurniture($furniture);

        echo "Arranging furniture in " . $this->getResident() . "'s house..." . PHP_EOL . PHP_EOL;
    }

    public function showFurniture(): void
    {
        echo implode(', ', $this->getFurniture()) . PHP_EOL;
    }
}

<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID;


class Resident
{
    private string $name;
    private int $age;

    /**
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
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
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function createRoom(RoomInterface $room, array &$rooms): void
    {
        $rooms[] = $room->getName();
    }

    public function buyFurniture(HouseObjectInterface $houseObject, array &$furniture): void
    {
        $furniture[] = $houseObject->getName();
    }

    public function arrangeFurniture(array $furniture): void
    {
        sort($furniture);
    }
}

<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID\D;

class House
{
	private Room $livingRoom;
	private Room $kitchen;
	private Room $bedroom;

	public function createRoom(Room $room, string $name): Room
	{
		return $room->create($name);
	}
}

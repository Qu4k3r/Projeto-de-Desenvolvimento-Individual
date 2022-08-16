<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID\S;

class House implements SingleResponsibiltyPrinciple
{
	private bool $livingRoomLight;

	public function getLivingRoomLightState(): bool
	{
		return $this->livingRoomLight;
	}

	public function setLivingRoomLightState(bool $state): void
	{
		$this->livingRoomLight = $state;
	}

	public function turnLivingRoomLightsOn(): void
	{
		$this->setLivingRoomLightState(true);
		echo 'Living room lights are on';

		return;
	}

	public function turnLivingRoomLightsOff(): void
	{
		$this->setLivingRoomLightState(false);
		echo 'Living room lights are off';

		return;
	}
}

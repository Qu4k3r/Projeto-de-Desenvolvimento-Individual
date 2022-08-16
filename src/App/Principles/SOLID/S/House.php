<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID\S;

class House
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
		
	public function turnLivingRoomLightsOnOrOff(): void
	{
		if ($this->getLivingRoomLightState()) {
			$this->setLivingRoomLightState(false);
			echo 'Living room lights are off';
			return;
		}

		$this->setLivingRoomLightState(true);
		echo 'Living room lights are on';

		return;
	}
}

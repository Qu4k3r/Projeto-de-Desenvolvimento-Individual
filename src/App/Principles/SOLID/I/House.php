<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID\I;

class House implements HouseInterface
{
    private Window $window;
    private Roof $roof;

    public function paintWindow(): void
    {
        $this->window->paint();
    }

    public function paintRoof(): void
    {
        $this->roof->paint();
    }
}

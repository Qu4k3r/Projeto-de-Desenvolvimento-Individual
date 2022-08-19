<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID\I;

class Apartment implements ApartmentInterface
{
    private Window $window;

    public function paintWindow(): void
    {
        $this->window->paint();
    }
}

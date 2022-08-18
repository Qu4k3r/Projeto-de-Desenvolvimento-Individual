<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID\L;

class MotorHome extends AbstractResidence
{
    private Motor $motor;

    public function fazerRevisaoMotor(): void
    {
        $this->motor->revisar();
    }

    // ...
}

<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID\O;

class AmericanFootBall implements BallInterface
{
    public function getShape(): BallShape
    {
        return BallShape::Oval;
    }
}

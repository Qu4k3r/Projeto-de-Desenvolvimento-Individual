<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID\O;

class SoccerBall implements BallInterface
{
    public function getShape(): BallShape
    {
        return BallShape::Circle;
    }
}

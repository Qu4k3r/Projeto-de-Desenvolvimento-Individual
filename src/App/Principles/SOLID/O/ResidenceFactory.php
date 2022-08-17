<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID\O;

class ResidenceFactory implements ResidenceInterface
{
    /**
     * @throws \Exception
     */
    public static function create(ResidenceType $residenceType): ResidenceInterface
    {
        return match ($residenceType) {
            ResidenceType::House => new House(),
            ResidenceType::Apartment => new Apartment(),
            ResidenceType::MotorHome => new MotorHome(),
            default => throw new \Exception('Esse tipo de residência ainda não foi implementado')
        };
    }
}

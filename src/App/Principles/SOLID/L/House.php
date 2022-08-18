<?php

namespace Qu4k3r\Pdi\App\Principles\SOLID\L;

class House extends AbstractResidence
{
    private IPTU $iptu;

    public function pagarIptu(): void
    {
        $this->iptu->pagar();
    }
}

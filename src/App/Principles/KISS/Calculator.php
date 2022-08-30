<?php

namespace Qu4k3r\Pdi\App\Principles\KISS;

class Calculator
{
    public function sum(int $num1, int $num2): int
    {
        return $num1 + $num2;
    }

    public function subtract(int $num1, int $num2): int
    {
        return $num1 - $num2;
    }

    public function multiply(int $num1, int $num2): int
    {
        return $num1 * $num2;
    }

    public function divide(int $num1, int $num2): int
    {
        return $num1 / $num2;
    }
}

//

$caluculator = new Calculator();
$result = $caluculator->sum(1, 2);

<?php

namespace App\Creational\AbstractFactory\Conceptual;

use App\Creational\AbstractFactory\Conceptual\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}

<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}

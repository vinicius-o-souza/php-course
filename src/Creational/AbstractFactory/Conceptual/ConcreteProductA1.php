<?php

namespace App\Creational\AbstractFactory\Conceptual;

use App\Creational\AbstractFactory\Conceptual\AbstractProductA;

/**
 * Concrete Products are created by corresponding Concrete Factories.
 */
class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}
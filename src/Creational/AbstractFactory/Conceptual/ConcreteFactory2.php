<?php

namespace App\Creational\AbstractFactory\Conceptual;

use App\Creational\AbstractFactory\Conceptual\AbstractFactory;

/**
 * Each Concrete Factory has a corresponding product variant.
 */
class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2;
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2;
    }
}
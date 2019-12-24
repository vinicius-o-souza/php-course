<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\AbstractFactory;
use App\Creational\AbstractFactory\ConcreteFactory1;
use App\Creational\AbstractFactory\ConcreteFactory2;

class Inicialize
{
    
    public function __construct()
    {
        /**
         * The client code can work with any concrete factory class.
         */
        echo "Client: Testing client code with the first factory type:<br>";
        $this->clientCode(new ConcreteFactory1);

        echo "<br>";

        echo "Client: Testing the same client code with the second factory type:<br>";
        $this->clientCode(new ConcreteFactory2);
    }
    
    /**
     * The client code works with factories and products only through abstract
     * types: AbstractFactory and AbstractProduct. This lets you pass any factory or
     * product subclass to the client code without breaking it.
     */
    private function clientCode(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        // echo $productA->usefulFunctionA() . "<br>";
        echo $productB->usefulFunctionB() . "<br>";
        echo $productB->anotherUsefulFunctionB($productA) . "<br>";
    }
}
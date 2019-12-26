<?php

namespace App\Creational\AbstractFactory;

use App\DesignPattern;
use App\Creational\AbstractFactory\Conceptual\{AbstractFactory, ConcreteFactory1, ConcreteFactory2};

class AbstractFactoryDesign implements DesignPattern
{
    public function conceptualExample()
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
    
    public function realWorldExample()
    {
        
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
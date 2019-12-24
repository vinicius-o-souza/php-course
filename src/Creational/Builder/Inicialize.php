<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Director;
use App\Creational\Builder\ConcreteBuilder1;

class Inicialize
{
    public function __construct()
    {    
        $director = new Director;
        $this->clientCode($director);
    }
    
    /**
     * The client code creates a builder object, passes it to the director and then
     * initiates the construction process. The end result is retrieved from the
     * builder object.
     */
    private function clientCode(Director $director)
    {
        $builder = new ConcreteBuilder1;
        $director->setBuilder($builder);

        echo "Standard basic product:<br>";
        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();

        echo "Standard full featured product:<br>";
        $director->buildFullFeaturedProduct();
        $builder->getProduct()->listParts();

        // Remember, the Builder pattern can be used without a Director class.
        echo "Custom product:<br>";
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }   
}
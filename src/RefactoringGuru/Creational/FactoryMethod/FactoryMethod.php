<?php

namespace App\RefactoringGuru\Creational\FactoryMethod;

use App\RefactoringGuru\Creational\FactoryMethod\ConcreteCreator1;
use App\RefactoringGuru\Creational\FactoryMethod\ConcreteCreator2;
use App\RefactoringGuru\Creational\FactoryMethod\Creator;

abstract class FactoryMethod 
{
    
    public function create() 
    {
        /**
         * The Application picks a creator's type depending on the configuration or
         * environment.
         */
        echo "App: Launched with the ConcreteCreator1.<br>";
        self::clientCode(new ConcreteCreator1);
        echo "<br><br>";

        echo "App: Launched with the ConcreteCreator2.<br>";
        self::clientCode(new ConcreteCreator2);
    }

    /**
     * The client code works with an instance of a concrete creator, albeit through
     * its base interface. As long as the client keeps working with the creator via
     * the base interface, you can pass it any creator's subclass.
     */
    function clientCode(Creator $creator)
    {
        // ...
        echo "Client: I'm not aware of the creator's class, but it still works.<br>"
            . $creator->someOperation();
        // ...
    }    
    
}
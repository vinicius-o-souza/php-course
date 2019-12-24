<?php

namespace App\Creational\FactoryMethod;

class Inicialize
{
    
    public function __construct()
    {
        /**
         * The Application picks a creator's type depending on the configuration or
         * environment.
         */
        echo "App: Launched with the ConcreteCreator1.<br>";
        $this->clientCode(new ConcreteCreator1);
        echo "<br><br>";

        echo "App: Launched with the ConcreteCreator2.<br>";
        $this->clientCode(new ConcreteCreator2);
    }
    
    /**
     * The client code works with an instance of a concrete creator, albeit through
     * its base interface. As long as the client keeps working with the creator via
     * the base interface, you can pass it any creator's subclass.
     */
    private function clientCode(Creator $creator)
    {
        // ...
        echo "Client: I'm not aware of the creator's class, but it still works.<br>"
            . $creator->someOperation();
        // ...
    }
}
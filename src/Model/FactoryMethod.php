<?php

namespace App\Model;

use App\Model\DesignPattern;
use App\RefactoringGuru\Creational\FactoryMethod\ConcreteCreator1;
use App\RefactoringGuru\Creational\FactoryMethod\ConcreteCreator2;
use App\RefactoringGuru\Creational\FactoryMethod\Creator;

class FactoryMethod implements DesignPattern
{
    public function __construct()
    {
        $this->conceptual();
    }
    
    public function conceptual() 
    {
        /**
         * The Application picks a creator's type depending on the configuration or
         * environment.
         */
        echo "App: Launched with the ConcreteCreator1.<br>";
        self::clientCodeConceptual(new ConcreteCreator1);
        echo "<br><br>";

        echo "App: Launched with the ConcreteCreator2.<br>";
        self::clientCodeConceptual(new ConcreteCreator2);
    }

    /**
     * The client code works with an instance of a concrete creator, albeit through
     * its base interface. As long as the client keeps working with the creator via
     * the base interface, you can pass it any creator's subclass.
     */
    function clientCodeConceptual(Creator $creator)
    {
        // ...
        echo "Client: I'm not aware of the creator's class, but it still works.<br>"
            . $creator->someOperation();
        // ...
    }
    
    function realWorld(SocialNetworkPoster $creator)
    {
        // ...
        $creator->post("Hello world!");
        $creator->post("I had a large hamburger this morning!");
        // ...
    }

}
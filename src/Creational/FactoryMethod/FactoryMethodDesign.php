<?php

namespace App\Creational\FactoryMethod;

use App\DesignPattern;
use App\Creational\FactoryMethod\Conceptual\{Creator, ConcreteCreator1, ConcreteCreator2};
use App\Creational\FactoryMethod\RealWorld\{FacebookPoster, LinkedInPoster, SocialNetworkPoster};

class FactoryMethodDesign implements DesignPattern
{
    
    public function conceptualExample()
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
    
    public function realWorldExample()
    {
        /**
         * During the initialization phase, the app can decide which social network it
         * wants to work with, create an object of the proper subclass, and pass it to
         * the client code.
         */
        echo "Testing ConcreteCreator1:<br>";
        $this->clientCodeRealWorld(new FacebookPoster("john_smith", "******"));
        echo "<br><br>";

        echo "Testing ConcreteCreator2:<br>";
        $this->clientCodeRealWorld(new LinkedInPoster("john_smith@example.com", "******"));
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
    
    /**
     * The client code can work with any subclass of SocialNetworkPoster since it
     * doesn't depend on concrete classes.
     */
    private function clientCodeRealWorld(SocialNetworkPoster $creator)
    {
        // ...
        $creator->post("Hello world!");
        $creator->post("I had a large hamburger this morning!");
        // ...
    }
}
<?php

namespace App\Structural\Bridge;

use App\DesignPattern;
use App\Structural\Bridge\Conceptual\{Creator, ConcreteCreator1, ConcreteCreator2};
use App\Structural\Bridge\RealWorld\{HTMLRenderer, JsonRenderer, Product, ProductPage, SimplePage, Page};

class BridgeDesign implements DesignPattern
{
    
    public function conceptualExample()
    {
    }
    
    public function realWorldExample()
    {
        /**
         * The client code can be executed with any pre-configured combination of the
         * Abstraction+Implementation.
         */
        $HTMLRenderer = new HTMLRenderer;
        $JSONRenderer = new JsonRenderer;

        $page = new SimplePage($HTMLRenderer, "Home", "Welcome to our website!");
        echo "HTML view of a simple content page:<br>";
        $this->clientCodeRealWorld($page);
        echo "<br><br>";

        /**
         * The Abstraction can change the linked Implementation at runtime if needed.
         */
        $page->changeRenderer($JSONRenderer);
        echo "JSON view of a simple content page, rendered with the same client code:<br>";
        $this->clientCodeRealWorld($page);
        echo "<br><br>";


        $product = new Product("123", "Star Wars, episode1",
            "A long time ago in a galaxy far, far away...",
            "/images/star-wars.jpeg", 39.95);

        $page = new ProductPage($HTMLRenderer, $product);
        echo "HTML view of a product page, same client code:<br>";
        $this->clientCodeRealWorld($page);
        echo "<br><br>";

        $page->changeRenderer($JSONRenderer);
        echo "JSON view of a simple content page, with the same client code:<br>";
        $this->clientCodeRealWorld($page);
    }
    
    
    private function clientCode()
    {
    }
    
    /**
     * The client code usually deals only with the Abstraction objects.
     */
    private function clientCodeRealWorld(Page $page)
    {
        // ...

        echo $page->view();

        // ...
    }

}
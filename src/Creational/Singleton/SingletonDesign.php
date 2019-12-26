<?php

namespace App\Creational\Singleton;

use App\DesignPattern;
use App\Creational\Singleton\Conceptual\{Singleton};

class SingletonDesign implements DesignPattern
{
    
    public function conceptualExample()
    {
        $this->clientCode();
    }
    
    public function realWorldExample()
    {
        
    }
    
    /**
     * The client code.
     */
    private function clientCode()
    {
        $s1 = Singleton::getInstance();
        $s2 = Singleton::getInstance();
        if ($s1 === $s2) {
            echo "Singleton works, both variables contain the same instance.";
        } else {
            echo "Singleton failed, variables contain different instances.";
        }
    }
}
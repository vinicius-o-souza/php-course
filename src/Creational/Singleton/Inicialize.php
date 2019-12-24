<?php

namespace App\Creational\Singleton;

class Inicialize
{
    
    public function __construct()
    {
        $this->clientCode();
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
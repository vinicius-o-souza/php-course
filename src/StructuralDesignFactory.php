<?php

namespace App;

use App\DesignAbstractFactory;
use App\DesignPattern;

class StructuralDesignFactory extends DesignAbstractFactory
{
    
    public function createConceptualExample(DesignPattern $designPattern)
    {
        $designPattern->conceptualExample();
    }
    
    public function createRealWorldExample(DesignPattern $designPattern)
    {
        $designPattern->realWorldExample();
    }
}
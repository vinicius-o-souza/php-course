<?php

namespace App\Model\Factory;

use App\Model\DesignPattern;

abstract class DesignPatternFactory
{
    private $type;
    
    public abstract function factoryMethod();
    
    public function someOperation()
    {
        $designPattern = $this->factoryMethod();
        if ($type == 'conceptual') {
            $designPattern->conceptual();
        } else {
            $designPattern->realWorld();
        }
    }
}
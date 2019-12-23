<?php

namespace App\Model\Factory;

use App\Model\Factory\DesignPatternFactory;
use App\Model\FactoryMethod;

class FactoryMethodFactory extends DesignPatternFactory
{
    
    public function __construct($type)
    {
        $this->type = $type;
    }
    
    public function factoryMethod()
    {
        return new FactoryMethod();
    }
}
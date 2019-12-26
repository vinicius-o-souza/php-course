<?php

namespace App;

abstract class DesignAbstractFactory
{
    // private $designPattern;
    
    abstract public function createConceptualExample(DesignPattern $designPattern);
    
    abstract public function createRealWorldExample(DesignPattern $designPattern);
    
    // public function __construct(DesignPattern $designPattern)
    // {
    //     $this->designPattern = $designPattern;
    // }
    
    public function __get(string $name)
    {
        if (isset($this->$name)) {
            throw new Exception('Variable not found');
        }
        return $this->$name;
    }
}
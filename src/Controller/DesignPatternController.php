<?php

namespace App\Controller;

class DesignPatternController 
{
    public function __construct(DesignPattern $designPattern) 
    {
        $designPattern->execute();
    }    
}
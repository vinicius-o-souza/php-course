<?php

namespace App\RefactoringGuru\Creational;

use App\Model\DesignPattern;
use App\Model\Factory\FactoryMethodFactory;

abstract class Creational
{
    public function execute()
    {
        new FactoryMethodFactory('conceptual');
    }
}
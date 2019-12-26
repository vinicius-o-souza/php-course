<?php

namespace App\Creational\AbstractFactory\Conceptual;

/**
* Each distinct product of a product family should have a base interface. All
* variants of the product must implement this interface.
*/
interface AbstractProductA
{
   public function usefulFunctionA(): string;
}
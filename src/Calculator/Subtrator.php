<?php

namespace App\Calculator;

class Subtrator implements OperatorInterface 
{
  public function run($number, $result) 
  {
    return $result + $number;  
  }
}
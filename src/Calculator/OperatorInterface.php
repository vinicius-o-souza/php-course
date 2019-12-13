<?php

namespace App\Calculator;

interface OperatorInterface
{
  public function run($number, $result);
}
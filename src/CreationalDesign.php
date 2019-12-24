<?php

namespace App;

use App\Creational\FactoryMethod\Inicialize as InicializeFactory;
use App\Creational\AbstractFactory\Inicialize as InicializeAbstractFactory;
use App\Creational\Builder\Inicialize as InicializeBuilder;
use App\Creational\Prototype\Inicialize as InicializePrototype;
use App\Creational\Singleton\Inicialize as InicializeSingleton;

abstract class CreationalDesign
{
    
    public function execute()
    {
        // self::factoryMethod();
        // self::abstractFactory();
        // self::builder();
        // self::prototype();
        self::singleton();
    }
    
    private function factoryMethod()
    {
        new InicializeFactory();
    }
    
    private function abstractFactory()
    {
        new InicializeAbstractFactory();
    }
    
    private function builder()
    {
        new InicializeBuilder();
    }
    
    private function prototype()
    {
        new InicializePrototype();
    }
    
    private function singleton()
    {
        new InicializeSingleton();
    }
}
<?php

namespace App;

use App\CreationalDesignFactory;
use App\Creational\AbstractFactory\AbstractFactoryDesign;
use App\Creational\FactoryMethod\FactoryMethodDesign;
use App\Creational\Builder\BuilderDesign;
use App\Creational\Prototype\PrototypeDesign;
use App\Creational\Singleton\SingletonDesign;
use App\Structural\Adapter\AdapterDesign;
use App\Structural\Bridge\BridgeDesign;

abstract class Application
{
    public function start()
    {
        self::structural();
    }
    
    private function creational()
    {
        $creationalDesignFactory = new CreationalDesignFactory();
        // $creationalDesignFactory->createConceptualExample(new AbstractFactoryDesign);
        // $creationalDesignFactory->createConceptualExample(new FactoryMethodDesign);
        // $creationalDesignFactory->createRealWorldExample(new FactoryMethodDesign);
        // $creationalDesignFactory->createRealWorldExample(new BuilderDesign);
        // $creationalDesignFactory->createConceptualExample(new PrototypeDesign);
        $creationalDesignFactory->createRealWorldExample(new PrototypeDesign);
        // $creationalDesignFactory->createConceptualExample(new SingletonDesign);
    }
    
    private function structural()
    {
        $structuralDesignFactory = new StructuralDesignFactory();
        // $structuralDesignFactory->createRealWorldExample(new AdapterDesign());
        $structuralDesignFactory->createRealWorldExample(new BridgeDesign());
    }
}

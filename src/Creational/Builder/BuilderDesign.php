<?php

namespace App\Creational\Builder;

use App\DesignPattern;
use App\Creational\Builder\Conceptual\Director;
use App\Creational\Builder\Conceptual\ConcreteBuilder1;
use App\Creational\Builder\RealWorld\MysqlQueryBuilder;
use App\Creational\Builder\RealWorld\PostgresQueryBuilder;
use App\Creational\Builder\RealWorld\SQLQueryBuilder;

class BuilderDesign implements DesignPattern
{
    
    public function conceptualExample()
    {
        $director = new Director;
        $this->clientCode($director);
    }
    
    public function realWorldExample()
    {
        /**
         * The application selects the proper query builder type depending on a current
         * configuration or the environment settings.
         */
        // if ($_ENV['database_type'] == 'postgres') {
        //     $builder = new PostgresQueryBuilder(); } else {
        //     $builder = new MysqlQueryBuilder; }
        //
        // clientCode($builder);


        echo "Testing MySQL query builder:\n";
        $this->clientCodeRealWorld(new MysqlQueryBuilder);

        echo "\n\n";

        echo "Testing PostgresSQL query builder:\n";
        $this->clientCodeRealWorld(new PostgresQueryBuilder);
    }
    
    /**
     * The client code creates a builder object, passes it to the director and then
     * initiates the construction process. The end result is retrieved from the
     * builder object.
     */
    private function clientCode(Director $director)
    {
        $builder = new ConcreteBuilder1;
        $director->setBuilder($builder);

        echo "Standard basic product:<br>";
        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();

        echo "Standard full featured product:<br>";
        $director->buildFullFeaturedProduct();
        $builder->getProduct()->listParts();

        // Remember, the Builder pattern can be used without a Director class.
        echo "Custom product:<br>";
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }   
    
    /**
     * Note that the client code uses the builder object directly. A designated
     * Director class is not necessary in this case, because the client code needs
     * different queries almost every time, so the sequence of the construction
     * steps cannot be easily reused.
     *
     * Since all our query builders create products of the same type (which is a
     * string), we can interact with all builders using their common interface.
     * Later, if we implement a new Builder class, we will be able to pass its
     * instance to the existing client code without breaking it thanks to the
     * SQLQueryBuilder interface.
     */
    private function clientCodeRealWorld(SQLQueryBuilder $queryBuilder)
    {
        // ...

        $query = $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->limit(10, 20)
            ->getSQL();

        echo $query;

        // ...
    }
}
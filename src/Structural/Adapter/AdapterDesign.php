<?php

namespace App\Structural\Adapter;

use App\DesignPattern;
use App\Structural\Adapter\Conceptual\{Creator, ConcreteCreator1, ConcreteCreator2};
use App\Structural\Adapter\RealWorld\{EmailNotification, Notification, SlackApi, SlackNotification};

class AdapterDesign implements DesignPattern
{
    
    public function conceptualExample()
    {
    }
    
    public function realWorldExample()
    {
        echo "Client code is designed correctly and works with email notifications:<br>";
        $notification = new EmailNotification("developers@example.com");
        $this->clientCodeRealWorld($notification);
        echo "<br><br>";


        echo "The same client code can work with other classes via adapter:<br>";
        $slackApi = new SlackApi("example.com", "XXXXXXXX");
        $notification = new SlackNotification($slackApi, "Example.com Developers");
        $this->clientCodeRealWorld($notification);
    }
    
    
    private function clientCode()
    {
    }
    
    /**
     * The client code can work with any class that follows the Target interface.
     */
    private function clientCodeRealWorld(Notification $notification)
    {
         // ...

            echo $notification->send("Website is down!",
            "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
            "Our website is not responding. Call admins and bring it up!");

        // ...
    }
}
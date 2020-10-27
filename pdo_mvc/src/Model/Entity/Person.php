<?php
declare(strict_types = 1);

namespace App\Model\Entity;

class Person
{
    private $name;
    private $age;
    
    private $books;

    public function __construct()
    {
        echo "Calling me...";
    }

    public function sayHello()
    {
        echo "Hello ".$this->name . ", I'm ".$this->age;
    }
}
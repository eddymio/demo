<?php
declare(strict_types = 1);

namespace App\Model\Entity;

class Person
{
    private string $name;
    private int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello(): void
    {
        echo "Hello ".$this->name . ", I'm ".$this->age;
    }
}
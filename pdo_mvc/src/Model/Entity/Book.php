<?php
declare(strict_types = 1);

namespace App\Model\Entity;

class Book
{
    private $title;
    private $date;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello()
    {
        echo "Hello ".$this->name . ", I'm ".$this->age;
    }
}
<?php
declare(strict_types = 1);

namespace App\Model\Entity;

class Person
{
    public int $id;
    private string $name;
    private int $age;
    
    public array $books = [];

    public function sayHello(): void
    {
        echo "Hello ".$this->name . ", I'm ".$this->age;
    }

    public function sayHelloToMyBooks(): void
    {
        foreach($this->books as $book)
        {
            $book->sayHello();
            echo "<br/>";
        }
    }
}
<?php
declare(strict_types = 1);

namespace App\Controller;

use App\Model\Manager;
use App\Model\Entity\Person;

class Frontend
{
    private array $persons;
    private ?Manager $manager;

    public function __construct() 
    {
        $this->manager = new Manager();
    }

    public function helloEveryone(): void
    {
        $this->persons = $this->manager->getPersons();    

        foreach($this->persons as $person)
        {
            $person->sayHello();
            echo "<br/>";
        }
    }

    public function helloWithBooks(): void
    {
        $this->persons = $this->manager->getPersonsAndBooks();    

        foreach($this->persons as $person)
        {
            $person->sayHello();
            $person->sayHelloToMyBooks();
            echo "<br/>";
        }
    }
    
    public function separator(): void 
    {
        echo "<hr/>";
    }
}
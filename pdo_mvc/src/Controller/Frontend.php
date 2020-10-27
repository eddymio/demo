<?php
declare(strict_types = 1);

namespace App\Controller;

use App\Model\Manager;
use App\Model\Entity\Person;

class Frontend
{
    private $persons;

    public function __construct() 
    {
        $manager = new Manager();
        $this->persons = $manager->getPersons();    
    }

    public function home()
    {
        foreach($this->persons as $person)
        {
            $person->sayHello();
        }
    }
}
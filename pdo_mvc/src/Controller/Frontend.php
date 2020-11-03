<?php
declare(strict_types = 1);

namespace App\Controller;

use App\Model\Manager;
use App\Model\Entity\Person;

class Frontend
{
    public const BR_TAG = "<br/>";
    private array $persons;
    private Manager $manager;

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
            echo self::BR_TAG;
        }
    }

    public function helloWithBooks(): void
    {
        $this->persons = $this->manager->getPersonsAndBooks();    

        foreach($this->persons as $person)
        {
            echo "<fieldset><legend>";
            $person->sayHello();
            echo "</legend>";
            $person->sayHelloToMyBooks();
            echo "</fieldset>";
        }
    }
    
    public static function separator(): void 
    {
        echo "<hr/>";
    }
}
<?php
declare(strict_types = 1);

namespace App\Controller;

use App\Model\Entity\Person;

class Frontend
{
    private Person $person;

    public function __construct() 
    {
        $this->person = new Person("Owner", 70);    
    }

    public function home()
    {
        $this->person->sayHello();
    }
}
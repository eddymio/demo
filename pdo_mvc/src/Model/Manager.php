<?php
declare(strict_types = 1);

namespace App\Model;

use App\Model\Entity\Person;

class Manager extends DBAccess
{
    public function getPersons()
    {
        $sql = 'SELECT name, age FROM app_person ORDER BY id DESC';
        
        $query = $this->db->query($sql);
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, Person::class);
//       $query-> setFetchMode(\PDO::FETCH_CLASS, 'App\Model\Entity\Person', array(0 => false));

        $persons = $query->fetchAll();
        
        $query->closeCursor();
        
        return $persons;
    }
}
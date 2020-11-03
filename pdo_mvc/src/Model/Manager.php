<?php
declare(strict_types = 1);

namespace App\Model;

use App\Model\Entity\Person;
use App\Model\Entity\Book;

class Manager extends DBAccess
{
    public function getPersons(): array
    {
        $sql = 'SELECT name, age FROM app_person ORDER BY id DESC';
        
        $query = $this->db->query($sql);
        $query->setFetchMode(\PDO::FETCH_CLASS, Person::class);

        $persons = $query->fetchAll();
        
        $query->closeCursor();
        
        return $persons;
    }

    public function getPersonsAndBooks(): array
    {
        $sql = 'SELECT app_person.name, app_person.id, app_person.age, app_book.title as book_title, app_book.creation_date as `book_date` FROM app_person LEFT JOIN app_book ON app_book.person_id = app_person.id ORDER BY app_person.id, app_book.creation_date DESC';
        
        $query = $this->db->query($sql);
        $query->setFetchMode(\PDO::FETCH_CLASS, Person::class);

        $persons = $query->fetchAll();

        $persons = Manager::mergePersons($persons);
        
        $query->closeCursor();
        
        return $persons;
    }

    public static function mergePersons(array $persons): array
    {
        $result = [];

        foreach($persons as $person)
        {
            $book = new Book($person->book_title, $person->book_date);

            if (array_key_exists($person->id, $result))
            {
                array_push($result[$person->id]->books, $book);
            }
            else 
            {
                $result[$person->id] = $person;
                array_push($result[$person->id]->books, $book);
            }
        }
        
        return $result;
    }
}
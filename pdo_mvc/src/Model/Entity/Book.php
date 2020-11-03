<?php
declare(strict_types = 1);

namespace App\Model\Entity;

class Book
{
    private int $id;
    private string $title;
    private string $date;

    public function __construct($title, $date)
    {
        $this->title = $title;
        $this->date = $date;
    }

    public function sayHello(): void
    {
        echo $this->title . " got on ".$this->date;
    }
}
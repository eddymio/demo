<?php
declare(strict_types = 1);

namespace App\Model;

abstract class DBAccess
{
    protected $db;

    public function __construct()
    {
        try {
        $this->db = new \PDO("mysql:host=db;dbname=test;charset=utf8", "test", "testpass");
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        } catch (PDOException $e) {
            echo "Connection error : " . $e->getMessage();
        }
    }
}
<?php

namespace App;
use PDO;
class Status
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }
    public function addStatus(string $name): void
    {
        $query = "insert into status (name) values (:name)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }

}
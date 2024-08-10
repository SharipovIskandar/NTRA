<?php

namespace App;
use PDO;
class Branch
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }
    public function addBranch(string $name, string $address): void
    {
        $query = "insert into branch (name, address) values (:name, :address)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->execute();
    }
}
<?php

namespace App;

use DateTime;
use PDO;

class Ads
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function addAds(string $title,
                           string $description,
                           int    $user_id,
                           int    $status_id,
                           int    $branch_id,
                           string $address,
                           float  $price,
                           int    $rooms): array|bool
    {
        $query = "insert into ads (title,description,user_id,status_id,branch_id,address,price,rooms,created_at) 
                  values (:title, :description, :user_id, :status_id, :branch_id, :address, :price, :rooms, NOW())";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateAds(string $title,
                              string $description,
                              int    $user_id,
                              int    $status_id,
                              int    $branch_id,
                              string $address,
                              float  $price,
                              int    $rooms): array

    {
        $query = "update ads set title = :title, description = :description, user_id = :user_id, status_id = :status_id, branch_id = :branch_id, address = :address , price = :price, rooms = :rooms where id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



}
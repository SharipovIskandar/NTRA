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

    public function addAds(): void
    {
        if (isset($_POST['title']) &&
            isset($_POST['description']) &&
            isset($_POST['userId']) &&
            isset($_POST['branchId']) &&
            isset($_POST['statusId']) &&
            isset($_POST['address']) &&
            isset($_POST['rooms']) &&
            isset($_POST['price'])) {

            $title = $_POST['title'];
            $description = $_POST['description'];
            $userId = $_POST['userId'];
            $branchId = $_POST['branchId'];
            $statusId = $_POST['statusId'];
            $address = $_POST['address'];
            $rooms = $_POST['rooms'];
            $price = $_POST['price'];

            $query = "insert into ads (title,description,user_id,status_id,branch_id,address,price,rooms,created_at) 
                  values (:title, :description, :user_id, :status_id, :branch_id, :address, :price, :rooms, NOW())";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':status_id', $statusId);
            $stmt->bindParam(':branch_id', $branchId);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':rooms', $rooms);
            $stmt->execute();
            header("location: /adsDashboard");
        }
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

    public function showPosts()
    {
        $query = "
        SELECT 
            ads.id, ads.title, ads.description, ads.address, ads.price, ads.rooms, ads.created_at,
            users.username AS user_name,
            branch.address AS branch_address,
            status.name AS status_name
        FROM ads
        JOIN users ON ads.user_id = users.id
        JOIN branch ON ads.branch_id = branch.id
        JOIN status ON ads.status_id = status.id
    ";

        return $this->pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }


}
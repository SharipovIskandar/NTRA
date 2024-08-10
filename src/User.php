<?php

namespace App;

use DateTime;
use PDO;

class User
{
//    public string $username;
//    public string $position;
//    public string $gender;
//    public string $phone;
//    public DateTime $created_at;
    private $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function create(string $username,
                           string $position,
                           string $gender,
                           string $phone): bool|array
    {
        $query = "INSERT INTO users (username, position, gender, phone, created_at) 
                          VALUES (:username, :position, :gender, :phone, NOW())";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser(
        int    $id,
        string $username,
        string $position,
        string $gender,
        string $phone,
    ): void
    {
        $query = "UPDATE users set username = :username, position = :position, gender = :gender, phone = :phone where id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
    }

    public function deleteUser(int $id): void
    {
        $query = "DELETE FROM users where id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function createUser()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email    = $_POST['email'];
            $password = $_POST['password'];

            $db   = DB::connect();
            $stmt = $db->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            $stmt = $db->prepare("SELECT * FROM users where email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
//            echo $result ? 'New record created successfully' : 'Something went wrong';
        }
        return null;
    }
    public function loginUser()
    {
        if (isset($_POST['email']) && isset($_POST['password']))
        {
            $email    = $_POST['email'];
            $password = $_POST['password'];
            $db   = DB::connect();
            $stmt = $db->prepare("SELECT * FROM users WHERE email = :email and password = :password");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $row = $stmt->fetch();
            $_SESSION['user'] = $email;
            echo $row ? header("Location: /") : 'Something went wrong';

        }
    }

}
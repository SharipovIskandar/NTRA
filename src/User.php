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
        if (isset($_POST['userName']) && isset($_POST['position']) && isset($_POST['gender']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password'])) {
            $userName = $_POST['userName'];
            $position = $_POST['position'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $email    = $_POST['email'];
            $password = $_POST['password'];


            $query = "INSERT INTO users (username, position, gender, phone, email, password, created_at) VALUES (:username, :position, :gender, :phone, :email, :password, NOW())";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':username', $userName);
            $stmt->bindParam(':position', $position);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            if ($stmt->execute()) {
                header("Location: /login");
                exit();
            }

            echo "Failed to insert user.";
        } else {
            echo "Required fields are missing.";
        }
    }



    public function loginUser()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email    = $_POST['email'];
            $password = $_POST['password'];

            $_SESSION['user'] = $email;

            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && $user['password']) {
                $_SESSION['user'] = $email;
                header("Location: /adsDashboard");
                exit();
            } else {
                echo 'Invalid credentials';
            }
        }
    }
    public function resetPassword()
    {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            echo "Password reset functionality not implemented yet.";
        }
    }

}
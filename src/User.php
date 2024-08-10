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

            $stmt = $this->pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', password_hash($password, PASSWORD_BCRYPT)); // Parolni xashlash
            $stmt->execute();

            header("Location: /login"); // Yaratilgandan keyin tizimga kirish sahifasiga yo'naltirish
            exit();
        }
    }
    public function loginUser()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email    = $_POST['email'];
            $password = $_POST['password'];

            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) { // Parolni tekshirish
                $_SESSION['user'] = $email;
                header("Location: /"); // Tizimga kirish muvaffaqiyatli bo'lsa, bosh sahifaga yo'naltirish
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
            // Parolni tiklash funksiyasini qo'shing
            echo "Password reset functionality not implemented yet.";
        }
    }

}
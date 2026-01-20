<?php 
namespace App\Service;

use App\Models\User;
use PDO;
use PDOException;

class UserService{
    private ?PDO $conn;
    private User $user;

    public function __construct(PDO $conn ,User $user)
    {
        $this->conn = $conn;
        $this->user = $user;
    }

    function createUser(){
        $sql = "INSERT INTO users (first_name, last_name, email, password, created_at) Values (:first_name, :last_name, :email, :password, now())";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":first_name", $this->user->getFirst_name());
        $stmt->bindValue(":last_name", $this->user->getLast_name());
        $stmt->bindValue(":email", $this->user->getEmail());
        $stmt->bindValue(":password", password_hash($this->user->getPassword(), PASSWORD_DEFAULT));
        $stmt->execute();
        $userId = $this->conn->lastInsertId();
        $this->user->setId($userId);
        $_SESSION["id"] = $userId;
        $this->readById();
    }

    function loginUser(){
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":email", $this->user->getEmail());
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,User::class);
        $stmt->execute();
        $user = $stmt->fetch();
        if (password_verify($this->user->getPassword() ,$this->user->getPassword()) === TRUE) {
            $_SESSION["id"] = $this->user->getId();
            $_SESSION["user"] = $user;
            var_dump($_SESSION["user"]);
        } else {
            throw new PDOException("Invalid email or password.");
            return NULL;
        }
    }

    function readById(){
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->user->getId());
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,User::class);
        $stmt->execute();
        $user = $stmt->fetch();
        $_SESSION["user"] = $user;
    }
}
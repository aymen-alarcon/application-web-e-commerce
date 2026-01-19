<?php
namespace App\Models;

use App\config;
use PDO;

class User{
    private ?PDO $conn;
    private ?int $id;
    private ?string $first_name;
    private ?string $last_name;
    private ?string $email;
    private ?string $password;
    private ?string $date_creation;

    function __construct($conn = NULL, $id = NULL, $first_name = NULL, $last_name = NULL, $email = NULL, $password = NUll, $date_creation = NULL)
    {
        $this->conn = $conn;
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFirst_name()
    {
        return $this->first_name;
    }

    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getLast_name()
    {
        return $this->last_name;
    }

    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getDate_creation() {
        return $this->date_creation;
    }

    public function setDate_creation($date_creation) {
        $this->date_creation = $date_creation;
    }

    function createUser(){
        $sql = "INSERT INTO users (first_name, last_name, email, password, date_creation) Values (:first_name, :last_name, :email, :password, now())";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":first_name", $this->getFirst_name());
        $stmt->bindValue(":last_name", $this->getLast_name());
        $stmt->bindValue(":email", $this->getEmail());
        $stmt->bindValue(":password", password_hash($this->getPassword(), PASSWORD_DEFAULT));
        $stmt->execute();
        $userId = $this->conn->lastInsertId();
        $this->setId($userId);
        $_SESSION["id"] = $userId;
        $this->readById();
    }

    function loginUser(){
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":email", $this->getEmail());
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,self::class);
        $stmt->execute();
        $user = $stmt->fetch();
        if (password_verify($this->getPassword() ,$user->getPassword()) === TRUE) {
            $_SESSION["id"] = $user->getId();
            $_SESSION["user"] = $user;
            var_dump($_SESSION["user"]);
        } else {
            throw new \Exception("Invalid email or password.");
            return NULL;
        }
    }

    function readById(){
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,self::class);
        $stmt->execute();
        $user = $stmt->fetch();
        $_SESSION["user"] = $user;
    }
}
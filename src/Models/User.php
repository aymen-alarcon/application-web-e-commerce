<?php
namespace App\Models;

use PDO;
use PDOException;

class User{
    private ?PDO $conn;
    private ?int $id;
    private ?string $first_name;
    private ?string $last_name;
    private ?string $email;
    private ?string $password;
    private ?string $created_at;
    private ?int $role_id;

    function __construct(PDO $conn = NULL,$id = NULL, $first_name = NULL, $last_name = NULL, $email = NULL, $password = NUll, $created_at = NULL, $role_id = 2)
    {
        $this->conn = $conn;
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->created_at = $created_at;
        $this->role_id = $role_id;
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

    public function getCreated_at() {
        return $this->created_at;
    }

    public function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    public function getRole_id()
    {
        return $this->role_id;
    }

    public function setRole_id($role_id)
    {
        $this->role_id = $role_id;

        return $this;
    }

    function createUser(){
        $sql = "INSERT INTO users (first_name, last_name, email, password, created_at) Values (:first_name, :last_name, :email, :password, now())";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":first_name", $this->getFirst_name());
        $stmt->bindValue(":last_name", $this->getLast_name());
        $stmt->bindValue(":email", $this->getEmail());
        $stmt->bindValue(":password", password_hash($this->getPassword(), PASSWORD_DEFAULT));
        $stmt->execute();
        $userId = $this->conn->lastInsertId();
        $this->setId($userId);
        $_SESSION["id"] = $userId;
        $_SESSION["cart"] = [];
        $this->readById();
    }

    public function authenticate()
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":email", $this->getEmail());
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, User::class);
        $stmt->execute();
        $user = $stmt->fetch();

        if (!$user || !password_verify($this->getPassword(), $user->getPassword())) {
            throw new PDOException("Invalid email or password.");
        }

        $_SESSION['cart'] = []; 

        return $user;
    }

    function readById(){
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, self::class);
        $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }

    function read(){
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, self::class);
        $stmt->execute();
        $user = $stmt->fetchAll();
        return $user;
    }

    function update(){
        $sql = "UPDATE users SET first_name = COALESCE(:first_name, first_name), last_name = COALESCE(:last_name, last_name), email = COALESCE(:email, email), role_id = COALESCE(:role_id, role_id) WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->bindValue(":first_name", $this->getFirst_name());
        $stmt->bindValue(":last_name", $this->getLast_name());
        $stmt->bindValue(":email", $this->getEmail());
        $stmt->bindValue(":role_id", $this->getRole_id());
        $stmt->execute();
    }

    function delete(){
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->execute();
    }
}
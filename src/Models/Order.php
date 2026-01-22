<?php
namespace App\Models;

use PDO;

class Order{
    private ?PDO $conn;
    private ?int $id;
    private ?string $title;
    private ?string $description;
    private ?string $created_at;
    private ?int $user_id;
    private ?string $first_name;
    private ?string $last_name;
    private ?string $email;

    function __construct(?PDO $conn = NULL, ?int $id=null,?string $title=null,?string $description=null,?string $created_at=null, ?int $user_id = NULL, ?string $last_name = NULL, ?string $first_name = NULL, ?string $email = NULL){
        $this->conn = $conn;
        $this->id=$id;
        $this->title=$title;
        $this->description=$description;
        $this->created_at=$created_at;
        $this->user_id=$user_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    function getId(){
        return $this->id;
    }

    function getTitle(){
        return $this->title;
    }

    function getDescription(){
        return $this->description;
    }

    function getCreated_at(){
        return $this->created_at;
    }

    function getUser_id(){
        return $this->user_id;
    }

    function setId($id){
        $this->id=$id;
    }

    function setTitle($title){
        $this->title=$title;
    }

    function setDescription($description){
        $this->description=$description;
    }

    function setCreated_at($created_at){
        $this->created_at=$created_at;
    }

    function setUser_id($user_id){
        $this->user_id=$user_id;
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

    function create(){
        $sql = "INSERT INTO orders (title, description, created_at, user_id)VALUES (:title, :description, now(), user_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":title", $this->getTitle());
        $stmt->bindValue(":description", $this->getDescription());
        $stmt->bindValue(":user_id", $this->getUser_id());
        $stmt->execute();
    }

    function delete(){
        $sql = "DELETE FROM orders WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->execute();
    }

    function read(){
        $sql = "SELECT o.*, u.first_name, u.last_name, u.email FROM orders o LEFT JOIN users u ON o.user_id = u.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, self::class);
        $stmt->execute();
        $orders = $stmt->fetchAll();
        return $orders;
    }
}
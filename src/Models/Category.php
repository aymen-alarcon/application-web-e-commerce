<?php

namespace App\Models;

use PDO;
use PDOException;

class Category{
    private ?PDO $conn;
    private ?int $id;
    private ?string $name;
    private ?string $description;

    public function __construct(?PDO $conn = null, ?int $id = NULL, ?string $name = NULL, ?string $description = NULL)
    {
        $this->conn = $conn;
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function read(){
        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Category::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
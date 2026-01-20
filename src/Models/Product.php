<?php

namespace App\Models;

use PDO;
use PDOException;

class Product{
    private ?PDO $conn;
    private ?int $id;
    private ?string $name;
    private ?string $description;
    private ?float $price;
    private ?int $stock;
    private ?int $category_id;

    public function __construct($conn = NULL, ?int $id = null, ?string $name = "", ?string $description = "", ?float $price = 0.0, ?int $stock = 0, ?int $category_id = NULL) 
    {
        $this->conn = $conn;
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->category_id = $category_id;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

        public function getCategory_id()
    {
        return $this->category_id;
    }

    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;
    }

    function readById(){
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, self::class);
        $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }

    function read(){
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, self::class);
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }
}
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
    private ?string $category_name;

    public function __construct($conn = NULL, ?int $id = null, ?string $name = "", ?string $description = "", ?float $price = 0.0, ?int $stock = 0, ?int $category_id = NULL, ?string $category_name = NULL) 
    {
        $this->conn = $conn;
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->category_id = $category_id;
        $this->category_name = $category_name;
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

    public function getCategory_name()
    {
        return $this->category_name;
    }

    public function setCategory_name($category_name)
    {
        $this->category_name = $category_name;
    }

    function create(){
        $sql = "INSERT INTO products (name, description, price, stock, category_id)VALUES (:name, :description, :price, :stock, :category_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":name", $this->getName());
        $stmt->bindValue(":description", $this->getDescription());
        $stmt->bindValue(":price", $this->getPrice());
        $stmt->bindValue(":stock", $this->getStock());
        $stmt->bindValue(":category_id", $this->getCategory_id());
        $stmt->execute();
    }

    function update(){
        $sql = "UPDATE products SET name = COALESCE(:name, name), description = COALESCE(:description, description), price = COALESCE(:price, price), stock = COALESCE(:stock, stock), category_id = COALESCE(:category_id, category_id) WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->bindValue(":name", $this->getName());
        $stmt->bindValue(":description", $this->getDescription());
        $stmt->bindValue(":price", $this->getPrice());
        $stmt->bindValue(":stock", $this->getStock());
        $stmt->bindValue(":category_id", $this->getCategory_id());
        $stmt->execute();
    }

    function delete(){
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->execute();
    }

    function readById(){
        $sql = "SELECT p.*, c.name AS category_name FROM products p LEFT JOIN categories c ON c.id = p.category_id WHERE id = :id";
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
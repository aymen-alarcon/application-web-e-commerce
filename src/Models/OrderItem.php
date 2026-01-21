<?php

namespace App\Models;
use PDO;
use PDOException;

class OrderItem{
    private ?PDO $conn;
    private ?int $id;
    private ?int $order_id;
    private ?int $product_id;
    private ?string $product_name;
    private ?float $price;
    private ?int $quantity;
    private ?string $created_at;

    public function __construct(?PDO $conn = NULL, ?int $id = null, ?int $order_id = NULL, ?int $product_id = NULL, ?string $product_name = NULL, ?float $price = NULL, ?int $quantity = NULL, ?string $created_at = null) 
    {
        $this->conn = $conn;
        $this->id = $id;
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->created_at = $created_at;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getOrder_id()
    {
        return $this->order_id;
    }

    public function setOrder_id($order_id)
    {
        $this->order_id = $order_id;
    }

    public function getProduct_id()
    {
        return $this->product_id;
    }

    public function setProduct_id($product_id)
    {
        $this->product_id = $product_id;
    }

    public function getProduct_name()
    {
        return $this->product_name;
    }

    public function setProduct_name($product_name)
    {
        $this->product_name = $product_name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    function read(){
        $sql = "SELECT * FROM order_items";
        $stmt = $this->conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, self::class);
        $stmt->execute();
        $order_items = $stmt->fetchAll();
        return $order_items;
    }
}

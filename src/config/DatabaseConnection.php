<?php
namespace App\config;

use PDO;
use PDOException;

class DatabaseConnection{
    private static ?DatabaseConnection $instance = NULL;
    private ?PDO $conn;

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=mysql;dbname=e_commerce;", "root", "root");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }

    }

    static function getInstance(): DatabaseConnection{
        if (self::$instance == NULL) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    function getConnection(){
        return $this->conn;
    }
}

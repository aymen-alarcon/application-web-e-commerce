<?php 
namespace App\Controller;

use App\Models\User;
use PDO;

class AuthController{
    private PDO $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    function loginUser(){
        $handler = new User($this->conn);
        $handler->setEmail($_POST["email"]);
        $handler->setPassword($_POST["password"]);
        $handler->loginUser();
        header("Location: /Home");
        exit;
    }

    function createUser(){
        $handler = new User($this->conn);
        $handler->setFirst_name($_POST["first_name"]);
        $handler->setLast_name($_POST["last_name"]);
        $handler->setEmail($_POST["email"]);
        $handler->setPassword($_POST["password"]);
        $handler->createUser();
        header("Location: /Home");
        exit;
    }
}

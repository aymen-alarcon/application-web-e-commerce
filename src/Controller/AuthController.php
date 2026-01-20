<?php 
namespace App\Controller;

use App\Models\User;
use App\Service\UserService;
use PDO;

class AuthController{
    private PDO $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    function loginUser(){
        $handler = new User();
        $handler->setEmail($_POST["email"]);
        $handler->setPassword($_POST["password"]);
        $repo = new UserService($this->conn, $handler);
        $repo->loginUser();
        header("Location: /Home");
        exit;
    }

    function createUser(){
        $handler = new User();
        $handler->setFirst_name($_POST["first_name"]);
        $handler->setLast_name($_POST["last_name"]);
        $handler->setEmail($_POST["email"]);
        $handler->setPassword($_POST["password"]);
        $repo = new UserService($this->conn, $handler);
        $repo->createUser();
        header("Location: /Home");
        exit;
    }
}

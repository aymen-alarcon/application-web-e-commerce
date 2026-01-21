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
        $handler = new User($this->conn);
        $handler->setEmail($_POST["email"]);
        $handler->setPassword($_POST["password"]);
        $user = $handler->authenticate();

        $_SESSION["id"] = $user->getId();
        $_SESSION["role_id"] = $user->getRole_id();

        if ($user->getRole_id() === 1) {
            $service = new UserService();
            $service->fetchCategories();
            $service->fetchOrders();
            $service->fetchProduct();
            $service->fetchRoles();
            $service->fetchUsers();
            header("Location: /Admin/Dashboard");
        } else {
            header("Location: /Home");
        }
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

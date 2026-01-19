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

    public function loginForm()
    {
        require __DIR__ . '/../views/login.php';
    }

    public function signupForm()
    {
        require __DIR__ . '/../views/signup.php';
    }

    public function logOutForm(){
        require __DIR__ . '/../views/logout.php';
    }

    public function mainPage(){
        require __DIR__ . '/../views/main.php';
    }

    function loginUser(){
        $handler = new User($this->conn);
        $handler->setEmail($_POST["email"]);
        $handler->setPassword($_POST["password"]);
        $user = $handler->loginUser();
        header("Location: /main");
        exit;
    }

    function createUser(){
        $handler = new User($this->conn);
        $handler->setFirst_name($_POST["first_name"]);
        $handler->setLast_name($_POST["last_name"]);
        $handler->setEmail($_POST["email"]);
        $handler->setPassword($_POST["password"]);
        $handler->createUser();
        header("Location: /main");
        exit;
    }
}

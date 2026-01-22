<?php 
    namespace App\Controller;

    use App\Models\User;
    use PDO;

    class UserController{
        private ?PDO $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        function createUser(){
            $handler = new User($this->conn);
            $handler->setFirst_name($_POST["first_name"]);
            $handler->setLast_name($_POST["last_name"]);
            $handler->setEmail($_POST["email"]);
            $handler->setPassword($_POST["password"]);
            $handler->setRole_id($_POST["role"]);
            $handler->createUser();

            if (http_response_code(200)) {
                header("Location: /Admin/Users");
            }
        }    

        function deleteUser(){
            $handler = new User($this->conn);
            $handler->setId($_POST["id"]);
            $handler->delete();

            header("Location: /Admin/Users");
        }

        function updateUser(){
            $handler = new User($this->conn);
            $handler->setId($_POST["id"]);
            $handler->setFirst_name($_POST["first_name"]);
            $handler->setLast_name($_POST["last_name"]);
            $handler->setEmail($_POST["email"]);
            $handler->setPassword($_POST["password"]);
            $handler->setRole_id($_POST["role"]);
            $handler->update();

            header("Location: /Admin/Users");
        }
    }
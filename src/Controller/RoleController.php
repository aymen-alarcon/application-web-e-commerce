<?php 
    namespace App\Controller;

    use App\Models\Role;
    use PDO;

    class RoleController{
        private ?PDO $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        function createRole(){
            $handler = new Role($this->conn);
            $handler->setRole_name($_POST["role_name"]);
            $handler->setPermission($_POST["permission"]);
            $handler->create();

            if (http_response_code(200)) {
                header("Location: /Admin/Categories");
            }
        }    

        function deleteRole(){
            $handler = new Role($this->conn);
            $handler->setId($_POST["id"]);
            $handler->delete();

            header("Location: /Admin/Categories");
        }

        function updateRole(){
            $handler = new Role($this->conn);
            $handler->setId($_POST["id"]);
            $handler->setRole_name($_POST["role_name"]);
            $handler->setPermission($_POST["permission"]);
            $handler->update();

            header("Location: /Admin/Categories");
        }
    }
<?php 
    namespace App\Controller;

    use App\Models\Order;
    use PDO;

    class OrderController{
        private ?PDO $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        function createOrder(){
            $handler = new Order($this->conn);
            $handler->setTitle($_POST["name"]);
            $handler->setDescription($_POST["description"]);
            $handler->setUser_id($_SESSION["id"]);
            $handler->create();

            if (http_response_code(200)) {
                header("Location: /Admin/Categories");
            }
        }    

        function deleteOrder(){
            $handler = new Order($this->conn);
            $handler->setId($_POST["id"]);
            $handler->delete();

            header("Location: /Admin/Categories");
        }
    }
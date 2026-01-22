<?php 
    namespace App\Controller;

    use App\Models\OrderItem;
    use PDO;

    class OrderItemController{
        private ?PDO $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        function createOrderItem(){
            $handler = new OrderItem($this->conn);
            $handler->setProduct_name($_POST["name"]);
            $handler->setPrice($_POST["description"]);
            $handler->setQuantity($_POST["description"]);
            $handler->setOrder_id($_POST["description"]);
            $handler->setProduct_id($_POST["description"]);
            $handler->create();

            if (http_response_code(200)) {
                header("Location: /Admin/Categories");
            }
        }    

        function deleteOrderItem    (){
            $handler = new OrderItem($this->conn);
            $handler->setId($_POST["id"]);
            $handler->delete();

            header("Location: /Admin/Categories");
        }

    }
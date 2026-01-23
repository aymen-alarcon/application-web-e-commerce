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
            foreach ($_SESSION["quantities"] as $key => $value) {
                $handler->setQuantity($value);
                $handler->setOrder_id($_GET["order_id"]);
                $handler->setProduct_id($key);
                $handler->create();
            }
            
            if (http_response_code(200)) {
                unset($_SESSION["cart"]);
                unset($_SESSION["quantities"]);
                header("Location: /Home");
            }
        }    

        function deleteOrderItem    (){
            $handler = new OrderItem($this->conn);
            $handler->setId($_POST["id"]);
            $handler->delete();

            header("Location: /Admin/Categories");
        }

    }
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
            $handler->setTitle("Order for the user with the id " . $_SESSION["id"]);
            $handler->setUser_id($_SESSION["id"]);
            $_SESSION["quantities"] = $_POST["quantities"];
            $orderId = $handler->create();

            if (http_response_code(200)) {
                if (str_contains($_SERVER["HTTP_REFERER"], "Cart")) {
                    header("Location: /registerOrderItemProcess?order_id=" . $orderId);
                }
            }
        }    

        function deleteOrder(){
            $handler = new Order($this->conn);
            $handler->setId($_POST["id"]);
            $handler->delete();

            header("Location: /Admin/Categories");
        }

        function readOrder(){
            $handler = new Order($this->conn);
            $handler->setUser_id($_SESSION['id']);
            return $handler->read();
        }
    }
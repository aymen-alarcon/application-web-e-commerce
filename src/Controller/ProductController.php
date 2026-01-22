<?php 
    namespace App\Controller;

    use App\Models\Product;
    use PDO;

    class ProductController{
        private ?PDO $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        function createProduct(){
            $handler = new Product($this->conn);
            $handler->setName($_POST["name"]);
            $handler->setDescription($_POST["description"]);
            $handler->setCategory_id($_POST["description"]);
            $handler->setPrice($_POST["description"]);
            $handler->setStock($_POST["description"]);
            $handler->create();

            if (http_response_code(200)) {
                header("Location: /Admin/Categories");
            }
        }    

        function deleteProduct(){
            $handler = new Product($this->conn);
            $handler->setId($_POST["id"]);
            $handler->delete();

            header("Location: /Admin/Categories");
        }

        function updateProduct(){
            $handler = new Product($this->conn);
            $handler->setId($_POST["id"]);
            $handler->setName($_POST["name"]);
            $handler->setDescription($_POST["description"]);
            $handler->setCategory_id($_POST["description"]);
            $handler->setPrice($_POST["description"]);
            $handler->setStock($_POST["description"]);
            $handler->update();

            header("Location: /Admin/Categories");
        }
    }
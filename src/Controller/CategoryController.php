<?php 
    namespace App\Controller;

    use App\Models\Category;
    use PDO;

    class CategoryController{
        private ?PDO $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        function createCategory(){
            $handler = new Category($this->conn);
            $handler->setName($_POST["name"]);
            $handler->setDescription($_POST["description"]);
            $handler->create();

            if (http_response_code(200)) {
                header("Location: /Admin/Categories");
            }
        }    
    }
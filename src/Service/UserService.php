<?php
    namespace App\Service;

    use App\Models\Category;
    use App\Models\Order;
    use App\Models\Product;
    use App\Models\Role;
    use App\Models\User;
    use PDO;

    class UserService{
        private ?PDO $conn;

        public function __construct(?PDO $conn = NULL)
        {
            $this->conn = $conn;
        }

        function fetchCategories(){
            $handler = new Category($this->conn);
            $categories = $handler->read();
            return $categories;
        }

        function fetchProducts(){
            $handler = new Product($this->conn);
            $products = $handler->read();
            return $products;
        }

        function fetchOrders(){
            $handler = new Order($this->conn);
            $orders = $handler->read();
            return $orders;
        }

        function fetchUsers(){
            $handler = new User($this->conn);
            $users = $handler->read();
            return $users;
        }

        function fetchRoles(){
            $handler = new Role($this->conn);
            $roles = $handler->read();
            return $roles;
        }

        function fetchCategoryById(){
            $handler = new Product($this->conn);
            $products = $handler->readById();
            return $products;
        }
    }

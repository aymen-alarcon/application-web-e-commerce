<?php

namespace App\core\Middleware;

class AuthMiddleware{
    public function handle(){
        $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        if (in_array($path, ["/Login", "/Signup"])) {
            return;
        }elseif (!isset($_SESSION["id"])) {
            require __DIR__ . '/../views/login.php';
            die("You must be logged in");
        }
    }
}
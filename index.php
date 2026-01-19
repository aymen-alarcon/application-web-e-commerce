<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

use App\config\DatabaseConnection;
use App\Controller\AuthController;
use App\core\Router;

$db = new DatabaseConnection;
$conn = $db->establishConnection();

$routing = new Router();

$controller = new AuthController($conn);

$routing->get("/login", [$controller, "loginForm"]);
$routing->get("/signup", [$controller, "signupForm"]);
$routing->get("/logout", [$controller, "logOutForm"]);
$routing->get("/main", [$controller, "mainPage"]);
$routing->post("/loginProcess", [$controller, "loginUser"]);
$routing->post("/registerProcess", [$controller, "createUser"]);
$routing->get("/", [$controller, "loginForm"]);

echo $routing->resolve();
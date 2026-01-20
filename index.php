<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

use App\config\DatabaseConnection;
use App\Controller\AuthController;
use App\Controller\ViewsController;
use App\core\Router;

$db = new DatabaseConnection;
$conn = $db->establishConnection();

$routing = new Router();

$authController = new AuthController($conn);
$viewsController =  new ViewsController();

$routing->get("/", [$viewsController, "loginForm"]);
$routing->get("/Login", [$viewsController, "loginForm"]);
$routing->get("/Signup", [$viewsController, "signupForm"]);
$routing->get("/Logout", [$viewsController, "logOutForm"]);
$routing->get("/Home", [$viewsController, "mainPage"]);
$routing->post("/loginProcess", [$authController, "loginUser"]);
$routing->post("/registerProcess", [$authController, "createUser"]);

echo $routing->resolve();
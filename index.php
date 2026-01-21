<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

use App\config\DatabaseConnection;
use App\Controller\AuthController;
use App\Controller\CategoryController;
use App\Controller\ViewsController;
use App\core\Router;

$conn = DatabaseConnection::getInstance()->getConnection();

$routing = new Router();

$authController = new AuthController($conn);
$viewsController =  new ViewsController();
$CategoryController = new CategoryController($conn);

$routing->get("/", [$viewsController, "loginForm"]);
$routing->get("/404", [$viewsController, "notFoundPage"]);
$routing->get("/Login", [$viewsController, "loginForm"]);
$routing->get("/Signup", [$viewsController, "signupForm"]);
$routing->get("/Logout", [$viewsController, "logOutForm"]);
$routing->get("/Home", [$viewsController, "mainPage"]);
$routing->get("/Cart", [$viewsController, "cartPage"]);
$routing->get("/Product", [$viewsController, "productPage"]);
$routing->get("/Admin/Dashboard", [$viewsController, "adminDashboardPage"]);
$routing->get("/Admin/Categories", [$viewsController, "adminCategoryDashboardPage"]);
$routing->get("/Admin/Orders", [$viewsController, "adminOrderDashboardPage"]);
$routing->get("/Admin/Users", [$viewsController, "adminUserDashboardPage"]);
$routing->get("/Admin/Products", [$viewsController, "adminProductDashboardPage"]);
$routing->post("/loginProcess", [$authController, "loginUser"]);
$routing->post("/registerProcess", [$authController, "createUser"]);
$routing->post("/registerCategoryProcess", [$CategoryController, "createCategory"]);

echo $routing->resolve();
<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

use App\config\DatabaseConnection;
use App\Controller\AuthController;
use App\Controller\CategoryController;
use App\Controller\OrderController;
use App\Controller\OrderItemController;
use App\Controller\ProductController;
use App\Controller\UserController;
use App\Controller\ViewsController;
use App\core\Router;

$conn = DatabaseConnection::getInstance()->getConnection();

$routing = new Router();

$authController = new AuthController($conn);
$viewsController =  new ViewsController();
$CategoryController = new CategoryController($conn);
$OrderItemController = new OrderItemController($conn);
$OrderController = new OrderController($conn);
$ProductController = new ProductController($conn);
$UserController = new UserController($conn);

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
$routing->post("/updateCategoryProcess", [$CategoryController, "updateCategory"]);
$routing->post("/deleteCategoryProcess", [$CategoryController, "deleteCategory"]);
$routing->post("/registerUserProcess", [$UserController, "createUser"]);
$routing->post("/updateUserProcess", [$UserController, "updateUser"]);
$routing->post("/deleteUserProcess", [$UserController, "deleteUser"]);
$routing->post("/registerProductProcess", [$ProductController, "createProduct"]);
$routing->post("/updateProductProcess", [$ProductController, "updateProduct"]);
$routing->post("/deleteProductProcess", [$ProductController, "deleteProduct"]);
$routing->post("/registerOrderProcess", [$OrderController, "createOrder"]);
$routing->post("/deleteOrderProcess", [$OrderController, "deleteOrder"]);
$routing->post("/registerOrderItemProcess", [$OrderItemController, "createOrderItem"]);
$routing->post("/deleteOrderItemProcess", [$OrderItemController, "deleteOrderItem"]);


echo $routing->resolve();
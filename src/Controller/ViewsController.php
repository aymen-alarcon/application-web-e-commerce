<?php
namespace App\Controller;

class ViewsController{
    public function loginForm()
    {
        require __DIR__ . '/../views/Auth/Login.php';
    }

    public function signupForm()
    {
        require __DIR__ . '/../views/Auth/register.php';
    }

    public function logOutForm(){
        require __DIR__ . '/../views/Auth/Logout.php';
    }

    public function mainPage(){
        require __DIR__ . '/../views/Home/home.php';
    }

    public function cartPage(){
        require __DIR__ . '/../views/Cart/Cart.php';
    }

    public function productPage(){
        require __DIR__ . '/../views/Product/product.php';
    }

    public function adminDashboardPage(){
        require __DIR__ . '/../views/Admin/dashboard.php';
    }

    public function adminCategoryDashboardPage(){
        require __DIR__ . '/../views/Admin/Category_dashboard.php';
    }

    public function adminUserDashboardPage(){
        require __DIR__ . '/../views/Admin/User_dashboard.php';
    }

    public function adminOrderDashboardPage(){
        require __DIR__ . '/../views/Admin/Order_dashboard.php';
    }

    public function notFoundPage(){
        require __DIR__ . '/../views/404.html';
    }
}
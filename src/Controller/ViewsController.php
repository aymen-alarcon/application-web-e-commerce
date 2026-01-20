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
}
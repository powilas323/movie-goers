<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserManagementController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('UserManagement/login.html.twig');
    }

    /**
     * @Route("/register", name="register")
     */
    public function register()
    {
        return $this->render('UserManagement/register.html.twig');
    }

     /**
     * @Route("/profile", name="profile")
     */
    public function profile()
    {
        return $this->render('UserManagement/profile.html.twig');
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        return $this->render('UserManagement/login.html.twig');
    }
}

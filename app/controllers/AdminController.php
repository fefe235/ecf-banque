<?php
require_once  __DIR__."/../model/Admin.php";
class AdminController 
{
    public function index() 
    {
        require_once __DIR__ . '/../views/login.php';
    }

    public function connect($username, $password)
    {   
        $admin = new Admin();
        $hash = $admin->getHash();
        if (password_verify($password, $hash[0]['mot_de_passe'])) {
            $_SESSION['username'] = $username;
            $_SESSION['message_flash'] = 'La connexion est un succès';
            header('Location: index.php');
        } else {
            $_SESSION['error_message'] = 'Les informations de connexion sont erronnées.';

            require_once __DIR__ . '/../views/login.php';
        }
    }

    public function disconnect()
    {
        unset($_SESSION['username']);
        header('Location: index.php');
    }
}
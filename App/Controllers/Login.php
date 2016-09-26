<?php
namespace App\Controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View,
    \App\Models\Login as loginModel,
    \Core\Controller;

class Login
{
    public function validLogin(){

        if (isset($_POST['username']) && isset($_POST['password'])) {

            $login = array();
            $loginResult = array();

            $login['user_name'] = htmlentities($_POST['username']);
            $login['password']  = htmlentities($_POST['password']);

            $loginResult =  loginModel::getUserPassword($login['user_name'], $login['password']);
            
            
        }   
        
        
        
        




    }
}
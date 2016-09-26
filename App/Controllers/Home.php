<?php
namespace App\Controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View,
    \App\Models\User as Users,
    \Core\Controller;

class Home extends Controller
{

    public function index()
    {
        View::set(['msg' => 'hola mundo']);
        View::rend("home/index");
    }

    /**
     * [test description]
     * @param  [type] $user [description]
     * @param  [type] $age  [description]
     * @return [type]       [description]
     */
    public function test($user, $age)
    {
        View::set("user", $user);
        View::set("title", "Custom MVC");
        View::rend("home");
    }

    public function admin($name)
    {
        $users = Users::getAll();
        View::set("users", $users);
        View::set("title", "Custom MVC");
        View::rend("admin");
    }

    public function user($id = 1)
    {
        $user = Users::getById($id);
        print_r($user);
    }
}

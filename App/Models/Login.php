<?php
namespace App\Models;

use \Core\Database;
use \App\Interfaces\Crud;

class Login
{
    public static function getUserPassword($user_name, $password)
    {
        try {
            $connection = Database::instance();
            $sql = "SELECT * from usuarios WHERE nombre_usuario = ? AND clave_usuario = ?";
            $query = $connection->prepare($sql);
            $query->bindParam(2, $user_name, $password, \PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
        }
        catch(\PDOException $e)
        {
            print "Error!: " . $e->getMessage();
        }
    }

}
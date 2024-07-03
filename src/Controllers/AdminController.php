<?php

namespace Resources\Objects\Controllers;

use Exception;
use Resources\Objects\Database\DatabaseConn;

class AdminController
{
    public static function getRoutes(){
        $db = new DatabaseConn;
        $db = $db->connect();
        $query = $db->prepare("SELECT * FROM `routes`");
        $execute = $query->execute();
        $routes = $query->fetchAll();
        
        return $routes;
    }

    public static function createRoute($title, $uri, $params, $file, $read){

        try{
        $db = new DatabaseConn;
        $db = $db->connect();
        $query = $db->prepare("INSERT INTO `routes` (`title`, `uri`, `params`, `file`, `read`) VALUES (:title, :uri, :params, :file, :read)");
        $query->bindParam(":title", $title);
        $query->bindParam(":uri", $uri);
        $query->bindParam(":params", $params);
        $query->bindParam(":file", $file);
        $query->bindParam(":read", $read);
        $execute = $query->execute();
        $routes = $query->fetchAll();
        
        $response = json_encode([
            "status" => 1,
            "class" => "success",
            "returnMessage" => "Rota cadastrada com sucesso"
        ]);

        return $response;

        }catch(Exception $e){

            $response = json_encode([
                "status" => 0,
                "class" => "danger",
                "returnMessage" => "Erro: ".$e->getCode().", Vôce não passou todos os paramêtros necessários."
            ]);

            return $response;
        }
    }
}
<?php

namespace Routes;

use Controllers\HomeController;

class RouteList{
    public function List($uri){
        $routes = [
            "/" => [
                "title" => "Página Inicial",
                "class" => HomeController::class,
                "method" => "homeView",
                "access" => "public"
            ]
        ];


        if(!array_key_exists($uri, $routes)){
            http_response_code(404);
            die;
        }

        return $routes[$uri];
    }
}
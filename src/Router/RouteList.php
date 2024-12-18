<?php

namespace Resources\Objects\Router;

/*View Controllers Import*/
use Resources\Objects\Controllers\Controller;
use Resources\Objects\Controllers\HomeController;

class RouteList
{
    public function routeCheck($uri, $params)
    {

        $routes = [
            "/" => [
                "title" => "SEMECCT",
                "class" => HomeController::class,
                "method" => "index",
                "access" => 0
            ]
        ];

        if(array_key_exists($uri, $routes)){
            return $routes[$uri];
        }

        if(!array_key_exists($uri, $routes)){
            http_response_code(404);
            die;
        }

    }
}

<?php

namespace Routes;

/* CONTROLLERS LIST */
use Controllers\homeController;
use Controllers\adminController;
use Controllers\costumerController;


class routeList{

     public function pathFinder($uri)
     {
          $routes = [
               "/" => [
                    "class" => homeController::class,
                    "method" => "index",
                    "access" => "public"
               ],
               "/admin" => [
                    "class" => adminController::class,
                    "method" => "index",
                    "access" => "admin"
               ],
               "/admin/cliente" => [
                    "class" => costumerController::class,
                    "method" => "index",
                    "access" => "admin"
               ]
          ];

          if(!array_key_exists($uri, $routes))
          {
               http_response_code(404);
               die;
          }
     
          return $routes[$uri];
     }

}
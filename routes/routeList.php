<?php

namespace Routes;

/* CONTROLLERS LIST */
use Controllers\homeController;
use Controllers\adminController;
use Controllers\brandsController;
use Controllers\categoriesController;
use Controllers\costumerController;
use Controllers\equipmentsController;
use Controllers\pagesController;
use Controllers\servicesController;
use Controllers\utilitiesController;


class routeList{

     public function pathFinder($uri)
     {
          if(!isset($_SERVER['QUERY_STRING'])){
               $params = "";
          } else {
               $params = $_SERVER['QUERY_STRING'];
          }
          
   

          $cGet = count($_GET);

          if(!isset($_GET['id'])){
               $uid = null;
          }

          $routes = [
               "/" => [
                    "class" => homeController::class,
                    "method" => "index",
                    "access" => "public"
               ],
               "/teste" => [
                    "class" => homeController::class,
                    "method" => "index",
                    "access" => "public"
               ],

               
          ];

          if(!array_key_exists($uri, $routes))
          {
               http_response_code(404);
               die;
          }
     
          return $routes[$uri];
     }

}
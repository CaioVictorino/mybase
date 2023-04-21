<?php

namespace Controllers;

use Tools\databaseTool;

class costumerController 
{

     public function __construct($method)
     {
          $this->$method();
     }

     public function index(){
          require_once VIEW.'admin/costumer.php';
     }

     public function register(){
          $database = new databaseTool;
     }

}
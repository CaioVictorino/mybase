<?php
namespace Tools;
use PDO;

class databaseTool{
     private $dsn = 'mysql:host=127.0.0.1;dbname=pdealer';
     private $username = 'root';
     private $password = '@Caio240894';

     public function __construct(){
          $db = new PDO($this->dsn, $this->username, $this->password);
          return $db;
     }
}
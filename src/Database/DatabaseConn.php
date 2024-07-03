<?php

namespace Resources\Objects\Database;

use Exception;
use PDO;

class DatabaseConn
{
    private $dsn = "mysql:host=localhost;port=3306;dbname=mybase";
    private $user = "root";
    private $password = "1234";

    public function connect()
    {   
        try{
            $conn = new PDO($this->dsn, $this->user, $this->password);
            return $conn;
        }catch(Exception $e){
            echo $e->getMessage()."<br>".$e->getCode()."<br>";
            die;
        }
    }
}

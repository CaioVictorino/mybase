<?php

namespace Resources\Objects\Database;

use Exception;
use PDO;

class DatabaseConn
{
    private $dsn = "mysql:host=127.0.0.1;port=3306;dbname=semecct";
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

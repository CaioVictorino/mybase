<?php

namespace Database;
use PDO;

class DatabaseConnection {
    private $dsn = 'mysql:dbname=caio_victorino;host=127.0.0.1';
    private $user = 'root';
    private $password = '!@Dev1994';

    public function connect(){
        $connect = new PDO($this->dsn, $this->user, $this->password);
        $connect = $connect;
    }

}
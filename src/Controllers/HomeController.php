<?php

namespace Resources\Objects\Controllers;

use Exception;
use Resources\Objects\Database\DatabaseConn;

class HomeController
{

    public function __construct($method, $title)
    {
        $this->$method($title);
    }

    public function index($title){
        require VIEW.("/home.php");
    }
}
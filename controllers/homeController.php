<?php

namespace Controllers;

class HomeController{

    public function __construct($method, $title)
    {
       $this->$method($title);
    }

    public function homeView($title){
        require VIEW."/home.php";
    }
}
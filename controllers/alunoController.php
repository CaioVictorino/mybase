<?php

namespace Controller\Aluno;

use Controller\Database\Database;

class Aluno implements Database
{

     public function __construct($email, $cpf, $name, $surname, $contact, $password, $born_date, $start_date)
     {
          
     }

     public function register(){
          $database = new Database;
          $database->query();
     }

}
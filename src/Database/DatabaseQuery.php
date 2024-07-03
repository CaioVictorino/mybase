<?php

namespace Resources\Objects\Database;

use Resources\Objects\Database\DatabaseConn;

class DatabaseQuery
{
    public function checkRoute($uri)
    {
        $db = new DatabaseConn;
        $db = $db->connect();

        $query = $db->query("SELECT * FROM `routes` WHERE `uri` = '$uri'");
        $result = $query->fetchObject();

        return $result;     
    }
}

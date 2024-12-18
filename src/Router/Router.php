<?php

namespace Resources\Objects\Router;

use Resources\Objects\Database\DatabaseQuery;

/*View Controllers Import*/
use Resources\Objects\Router\RouteList;

class Router
{
    public function requestRoute($uri, $params)
    {

            $check = new RouteList();
            $check = $check->routeCheck($uri, $params);
            return $check;

    }
}

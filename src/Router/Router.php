<?php

namespace Resources\Objects\Router;

use Resources\Objects\Database\DatabaseQuery;

/*View Controllers Import*/
use Resources\Objects\Controllers\Controller;

class Router
{
    public function requestRoute($uri, $params)
    {
        $route = new DatabaseQuery;
        $return = $route->checkRoute($uri);

    
        if(!isset($return->uri))
        {
            http_response_code(404);
            die;
        }
        
        if($params == "" && $return->params == 1)
        {
            http_response_code(404);
            die;
        }

        if($params != "" && $return->params == 0)
        {
            http_response_code(404);
            die;
        }

        if(isset($return->uri))
        {   
            $title = $return->title;
            require VIEW.$return->file;
        }

    }
}

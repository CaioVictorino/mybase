<?php

namespace Routes;

use Routes\routeList;


class Router {
    public function requester($uri){
        $data = new RouteList;
        $data = $data->List($uri);

        return $data;
    }
}
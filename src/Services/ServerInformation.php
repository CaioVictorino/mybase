<?php

namespace Resources\Objects\Services;

class ServerInformation{
    public function getMethod(){
        $method = $_SERVER['REQUEST_METHOD'];

        return $method;
    }
}
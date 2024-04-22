<?php

spl_autoload_register(function($class){
    include str_replace("\\", "/", __DIR__ . "/" . $class . ".php" );
});
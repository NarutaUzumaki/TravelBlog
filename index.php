<?php
    spl_autoload_register(function ($className){
        $namespace = str_replace("\\","/",__NAMESPACE__);
        $url = (empty($namespace)?"":$namespace."/").$className.'.php';
//        var_dump($url);
        if (file_exists($url)){
            require_once($url);
            return;
        }
    });
    require ("app/Router.php");
    $router = new app\Router();
    require 'app/config/routes.php';
    $router->run();
?>
<?php

namespace Router;
class Router
{
    private $controller;
    private static $routes;

    public function __construct(){
        self::$routes = [];
    }

    public static function get($route, $action)
    {
        self::createRoutes('get', $route, $action);
    }

    public static function post($route, $action)
    {
        self::createRoutes('post', $route, $action);
    }

    public static function createRoutes($title, $route, $action)
    {
        $param = explode('@', $action);
        $controller = $param[0];
        $method = $param[1];

        self::$routes[$title][] = [
            'path' => $route,
            'controller' => $controller,
            'method' => $method,
        ];
    }

    public function run()
    {
//        $controller = 'UserController';
//        $function = 'login';
        $methodTitle = strtolower($_SERVER['REQUEST_METHOD']);

        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach (self::$routes[$methodTitle] as $route) {
            if ($route['path'] == $path) {
                $controller = 'controller\\' . $route['controller'];

                $this->controller = new $controller();
                $func = $route['method'];
                $this->controller->$func();
                return;
            }
        }
        $this->controller = new \controller\UserController();
        $this->controller->login();
    }
}
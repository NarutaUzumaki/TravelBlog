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
        self::createRoutes($route, $action);
    }

    public static function post($route, $action)
    {
        self::createRoutes($route, $action);
    }

    public static function createRoutes($route, $action)
    {
        $param = explode('@', $action);
        $controller = $param[0];
        $method = $param[1];

        self::$routes = [
            'path' => $route,
            'controller' => $controller,
            'method' => $method,
        ];
    }

    public function run()
    {
        $controller = 'UserController';
        $function = 'login';

        $path = parse_url($_SERVER['REQUEST_URI']);

        foreach (self::$routes as $route) {
            if ($route['path'] == $path) {
                $controller = '/app/controllers' . $route['controller'];
                if (file_exists('app/controller/.' . $controller . '.php')) {
                    include ('app/controller/'.$controller.'.php');

                    $this->controller = new $controller();
                    if (method_exists($this->controller, $route['method'])) {
                        $this->$controller->$route['method'];
                    } else {
                        die("Function " . $route['method'] . ' not found in ' . $controller);
                    }
                } else {
                    die("Controller class" . $route['controller'] . " with not found");
                }
            }
        }
        $this->controller = new \controller\UserController();
        $this->controller->login();
    }
}
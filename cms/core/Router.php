<?php

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($route, $controller)
    {
        $this->routes['GET'][$route] = $controller;
    }

    public function post($route, $controller)
    {
        $this->routes['POST'][$route] = $controller;
    }

    public function direct($uri, $requestMethod, $app) {
        if(array_key_exists($uri, $this->routes[$requestMethod])) {
            require $this->routes[$requestMethod][$uri];
        } else {
            require "views/404.view.php";
        }

    }
}
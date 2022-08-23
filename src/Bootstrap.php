<?php

namespace App;

use App\Controller\HomeController;
use App\Router\Route;
use App\Router\Router;
use Exception;

class Bootstrap
{
    private Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run(): ?string
    {
        $homeRoute = new Route(
            '/',
            'homepage',
            HomeController::class,
            'home'
        );
        $this->router->addRoute($homeRoute);

        try {
            $route = $this->router->findRoute();
            if ($route instanceof Route) {
                // Si $route est une instance de Route, il y a une correspondance
                $controller = new $route->controller;
                $method = $route->method;
                return $controller->$method();
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return "404";
    }
}

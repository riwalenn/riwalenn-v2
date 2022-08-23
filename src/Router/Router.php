<?php

namespace App\Router;

use Exception;

class Router
{
    /**
     * @var array
     */
    private array $routes = [];

    /**
     * @var Route|null
     */
    private ?Route $foundRoute = null;

    /**
     * @param Route $route
     * @return void
     */
    public function addRoute(Route $route): void
    {
        $this->routes[] = $route;
    }

    /**
     * @return Route|null
     * @throws Exception
     */
    public function findRoute(): ?Route
    {
        $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        foreach ($this->routes as $route) {
            $pattern = sprintf('#^%s$#', $route->schema); // Met le schéma entre des # pour former l'expression régulière
            $check = preg_match($pattern, $request); // Effectue la recherche entre le schéma et l'url
            if ($check === 1) {
                // Le schéma d'une route correspond à l'url
                $this->foundRoute = $route;
            } else {
                // Une erreur est survenue dans le test
                throw new Exception();
            }
        }
        return $this->foundRoute;
    }
}

<?php

namespace App\Router;

/**
 * Représente une route
 */
class Route
{
    /**
     * @param string $schema Le format de l'url
     * @param string $name Le nom de la route
     * @param string $controller Le controller à appeler
     * @param string $method La méthode à appeler dans le controller
     */
    public function __construct(
        public string $schema,
        public string $name,
        public string $controller,
        public string $method
    ) {
    }
}

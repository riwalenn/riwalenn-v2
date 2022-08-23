<?php

namespace App\Router;

class Route
{
    /**
     * @param string $schema
     * @param string $name
     * @param string $controller
     * @param string $method
     */
    public function __construct(
        public string $schema,
        public string $name,
        public string $controller,
        public string $method
    ) {
    }
}

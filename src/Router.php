<?php

namespace App;

class Router
{
    private array $routes = [];

    public function get(string $path, \Closure $callback): void
    {
        $this->routes['GET'][$path] = $callback;
    }

    public function post(string $path, \Closure $callback): void
    {
        $this->routes['POST'][$path] = $callback;
    }

    public function resolve(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER['REQUEST_URI'];

        // Remove query parameters from the path
        if (strpos($path, '?') !== false) {
            $path = strstr($path, '?', true);
        }

        // Check if the route exists
        if (array_key_exists($path, $this->routes[$method] ?? [])) {
            $this->routes[$method][$path]();
        } else {
            echo "404 Not Found";
        }
    }
}

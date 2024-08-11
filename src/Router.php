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

        if (strpos($path, '?') !== false) {
            $path = strstr($path, '?', true);
        }

        if (array_key_exists($path, $this->routes[$method] ?? [])) {
            $this->routes[$method][$path]();
        } else {
            require __DIR__ . '/../view/404NotFounded.php';
        }
    }
}

<?php

namespace App;

class Router
{
    private object|null $updates;

    public function __construct()
    {
        $this->updates = json_decode(file_get_contents('php://input'));
    }
    public function get(string $path, \Closure $callback): void
    {
        if($_SERVER["REQUEST_METHOD"] === "GET" && $_SERVER["REQUEST_URI"] === $path)
        {
            $callback();
        }
    }
    public function post($path, $callback): void
    {
        if($_SERVER["REQUEST_METHOD"] === "POST" && $_SERVER["REQUEST_URI"] === $path)
        {
            $callback();
        }
    }
}
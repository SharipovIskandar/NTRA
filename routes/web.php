<?php

use App\Router;
use App\User;


$router = new Router();

$router->get("/", fn() => require "public/index.html");
$router->post("/createAcc",  fn() => (new User())->createUser());

$router->get("/login", fn() => require "public/index.html");
$router->post('/login', fn() => (new User())->loginUser());

$router->get("/createAcc", fn() => require 'view/createAccount.php');

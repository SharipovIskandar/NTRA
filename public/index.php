<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Router;
use App\User;

$router = new Router();


$router->get("/createAcc", function() {
    require __DIR__ . '/../view/createAccount.php';
});

$router->post("/createAcc", function() {
    (new User())->createUser();
});

$router->get("/login", function() {
    require __DIR__ . '/index.html';
});

$router->post("/login", function() {
    (new User())->loginUser();
});

$router->get("/forgetPass", function() {
    require __DIR__ . '/../view/forgetPassword.php';
});

$router->post("/forgetPass", function() {
    (new User())->resetPassword();
});

// Resolve the current route
$router->resolve();

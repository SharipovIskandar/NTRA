<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Router;
use App\User;

$router = new Router();

$router->get("/dashboard", function() {
    require __DIR__ . '/../view/adminDashboard.php';
});

$router->get("/", function() {
    require __DIR__ . '/index.html';
});

$router->get("/createAcc", function() {
    require __DIR__ . '/../view/auth/createAccount.php';
});

// src/Router.php
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
    require __DIR__ . '/../view/auth/forgetPassword.php';
});

$router->post("/forgetPass", function() {
    (new User())->resetPassword();
});

$router->resolve();

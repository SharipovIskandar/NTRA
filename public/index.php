<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

use App\Router;
use App\User;
use App\Ads;


$router = new Router();

$router->get("/", function() {
    require __DIR__ . '/index.html';
});

$router->get("/createAcc", function() {
    require __DIR__ . '/../view/auth/createAccount.php';
});

$router->post("/createAcc", function() {
    (new User())->createUser();
});

$router->post("/login", function() {
    (new User())->loginUser();
});

$router->get("/createAdsPage", function() {
    require __DIR__ . '/../view/createAds.php';
});

$router->post("/createAdsPage", function() {
    (new Ads())->addAds();
});

$router->get("/login", function() {
    require __DIR__ . '/index.html';
});

$router->get("/adsDashboard", function() {
    require __DIR__ . '/../view/adsDashboard.php';
});


$router->get("/forgetPass", function() {
    require __DIR__ . '/../view/auth/forgetPassword.php';
});

$router->get("/logout", function() {
    require __DIR__ . '/../view/auth/logout.php';
});

$router->post("/forgetPass", function() {
    (new User())->resetPassword();
});

$router->resolve();

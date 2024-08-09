<?php

declare(strict_types=1);

require_once 'bootstrap.php';

$user = new App\User();
$ads = new App\Ads();


$newAds = $ads->addAds("4 Xonali uy", "nimadurda",2, 1, 1, "Xorazim", 12000, 1);




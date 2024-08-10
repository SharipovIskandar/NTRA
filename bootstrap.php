<?php

declare(strict_types=1);

date_default_timezone_set('Asia/Tashkent');

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

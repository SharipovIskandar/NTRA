<?php

declare(strict_types=1);

require_once 'bootstrap.php';

$user = new App\User();

$user->deleteUser(id: 1);


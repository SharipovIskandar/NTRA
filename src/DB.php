<?php

declare(strict_types=1);

namespace App;

use PDO;

class DB
{
    public static function connect(): PDO
    {
        return new PDO('mysql:host=localhost;dbname=ntra', 'root', 'iskan2066');
    }
}
<?php

namespace App;

class Ads
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

}
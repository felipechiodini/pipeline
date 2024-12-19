<?php

namespace App\Middlewares;

use App\Contracts\Middleware;

class Version implements Middleware
{
    public function handle()
    {
        var_dump('Version');
    }
}
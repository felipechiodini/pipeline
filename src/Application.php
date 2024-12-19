<?php

namespace App;

use App\Contracts\Middleware;

class Application
{
    protected $middlewares = [];

    public function run($request)
    {
        foreach ($this->middlewares as $middleware) {
            $middleware->handle();
        }
    }

    public function addMidleware(Middleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }
}
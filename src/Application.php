<?php

namespace App;

use App\Contracts\Middleware;

class Application
{
    protected $middlewares = [];

    public function run()
    {
        $request = Request::capture();

        foreach ($this->middlewares as $middleware) {
            $middleware->handle($request);
        }
    }

    public function addMidleware(Middleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }
}
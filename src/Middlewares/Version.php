<?php

namespace App\Middlewares;

use App\Contracts\Middleware;
use App\Request;

class Version implements Middleware
{
    public function handle(Request $request)
    {
        if ($request->has('version') === false) {
            
        }
    }
}
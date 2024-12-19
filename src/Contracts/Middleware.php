<?php

namespace App\Contracts;

use App\Request;

interface Middleware
{
    public function handle(Request $request);
}
<?php

namespace App;

class Request
{
    protected $request;

    public function __construct()
    {
        $this->request = $_REQUEST;
    }

    public static function capture()
    {
        return new static(
            $_REQUEST
        );
    }

    public function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function has($key)
    {
        return isset($this->request[$key]);
    }
}
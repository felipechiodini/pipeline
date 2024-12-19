<?php

require __DIR__ . '/vendor/autoload.php';

$app = new App\Application();

$app->addMidleware(new App\Middlewares\Version());

$app->run();

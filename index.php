<?php

$app = new App\Application();

$app->addMidleware(new App\Middlewares\Version());

$app->run();

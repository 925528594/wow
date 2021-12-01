<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make('kernel');

$response = $kernel->handle(
    $request = Negan\Http\Request::capture()
);

$response->send();

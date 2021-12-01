<?php

$app = new Negan\Foundation\Application( $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__) );

$app->singleton(
    'kernel',
    App\Http\Kernel::class
);

return $app;
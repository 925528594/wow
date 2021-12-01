<?php

namespace App\Http;

use Negan\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        \App\Http\Middleware\CrossHttp::class
    ];

    protected $middlewareGroups = [
        'web' => [
        ],

        'api' => [
        ],
    ];

    protected $routeMiddleware = [
    ];

}

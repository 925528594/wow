<?php

return [

    /*
     * 应用名称
     */
    'name' => env('APP_NAME', 'Wow'),

    /*
     * DEBUG模式
     */
    'debug' => true,

    /*
     * 时区设置
     */
    'timezone' => 'UTC',

    'providers' => [
        /*
         * Wow Framework Service Providers...
         */
        Negan\View\ViewServiceProvider::class,

        /**
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    'aliases' => [
        'Config' => Negan\Support\Facades\Config::class,
        'Route' => Negan\Support\Facades\Route::class,
        'Request' => Negan\Support\Facades\Request::class,
    ],
];

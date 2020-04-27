<?php

namespace App\Http\Controllers;

class Controller
{

    public function __construct()
    {
        $origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
        header('Access-Control-Allow-Origin: ' . $origin);
        header('Access-Control-Allow-Credentials: true');
        if($_SERVER['REQUEST_METHOD'] === 'OPTIONS'){
            $cors_allow_headers = ['fecshop-uuid','fecshop-lang','fecshop-currency','access-token','x-token'];
            header('Access-Control-Allow-Origin: ' . $origin);
            header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, ".implode(', ',$cors_allow_headers));
            header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS');
            exit;
        }
    }

}

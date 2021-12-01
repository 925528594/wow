<?php

namespace App\Http\Middleware;

use Closure;

class CrossHttp
{
    public function handle($request, Closure $next) {
        $origin = $_SERVER['HTTP_ORIGIN'] ?? '';
        header('Access-Control-Allow-Origin: ' . $origin);
        header('Access-Control-Allow-Credentials: true');
        if($_SERVER['REQUEST_METHOD'] === 'OPTIONS'){
            $cors_allow_headers = ['fecshop-uuid','fecshop-lang','fecshop-currency','access-token','x-token'];
            header('Access-Control-Allow-Origin: ' . $origin);
            header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, ".implode(', ',$cors_allow_headers));
            header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS');
            exit;
        }

        return $next($request);
    }
}

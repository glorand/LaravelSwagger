<?php

namespace Glorand\LaravelSwagger\Http\Middleware;

use Closure;
use Glorand\LaravelSwagger\Services\Auth;
use Illuminate\Support\Facades\Config;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        $authService = new Auth();
        if (!$authService->isLoggedIn()) {
            return redirect(Config::get('laravel-swagger.swagger-route') . '-auth');
        }
        return $next($request);
    }
}
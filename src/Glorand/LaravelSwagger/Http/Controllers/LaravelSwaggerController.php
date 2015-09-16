<?php

namespace Glorand\LaravelSwagger\Http\Controllers;

use App\Http\Controllers\Controller;
use Glorand\LaravelSwagger\Services\SwaggerService;
use Illuminate\Support\Facades\Config;

class LaravelSwaggerController extends Controller
{
    public function getIndex()
    {
        $swaggerService = new SwaggerService();
        if (Config::get('laravel-swagger.generateAlways')) {
            $swaggerService->generateJson();
        }
    }
}

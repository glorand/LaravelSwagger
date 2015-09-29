<?php
$swaggerRoute = Config::get('laravel-swagger.swagger-route');
Route::controller($swaggerRoute . '-auth', 'Glorand\\LaravelSwagger\\Http\\Controllers\\AuthController');

Route::group(['middleware' => 'swagger.auth'], function () {
    $swaggerRoute = Config::get('laravel-swagger.swagger-route');
    Route::controller($swaggerRoute, 'Glorand\\LaravelSwagger\\Http\\Controllers\\LaravelSwaggerController');
});

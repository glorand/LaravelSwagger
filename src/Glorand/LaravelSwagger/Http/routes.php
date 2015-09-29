<?php
$swaggerRoute = Config::get('laravel-swagger.swagger-route');

Route::controller($swaggerRoute, 'Glorand\\LaravelSwagger\\Http\\Controllers\\LaravelSwaggerController');

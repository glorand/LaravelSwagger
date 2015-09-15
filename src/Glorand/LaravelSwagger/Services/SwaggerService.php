<?php

namespace Glorand\LaravelSwagger\Services;


class SwaggerService
{

    public function generateJson()
    {
        $appDir = base_path() . "/" . \Config::get('laravel-swagger.app-dir');
        $docDir = \Config::get('laravel-swagger.doc-dir');
        if (!\File::exists($docDir) || is_writable($docDir)) {
            if (\File::exists($docDir)) {
                \File::deleteDirectory($docDir);
            }
            \File::makeDirectory($docDir);
            $excludeDirs = \Config::get('laravel-swagger.excludes');
            $swagger = \Swagger\scan($appDir, [
                'exclude' => $excludeDirs
            ]);
            $filename = $docDir . '/swagger.json';
            file_put_contents($filename, $swagger);
        }
    }

}
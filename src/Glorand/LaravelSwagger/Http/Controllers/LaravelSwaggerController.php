<?php

namespace Glorand\LaravelSwagger\Http\Controllers;

use App\Http\Controllers\Controller;
use Glorand\LaravelSwagger\Services\SwaggerService;
use Illuminate\Support\Facades\Config;

class LaravelSwaggerController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $swaggerService = new SwaggerService();
        if (Config::get('laravel-swagger.generateAlways')) {
            $swaggerService->generateJson();
        }
        $viewParams = [
            'publicUrl' => 'vendor/laravel-swagger',
            'urlToDocs' => url(Config::get('laravel-swagger.doc-route')),
            'api_key' => Config::get('laravel-swagger.api-key'),
            'oauth2' => Config::get('laravel-swagger.oauth2')
        ];
        $response = response()->view('laravel-swagger::index', $viewParams);
        return $response;
    }

    /**
     * @param string $page
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function getDocs($page = 'swagger.json')
    {
        $filePath = Config::get('laravel-swagger.doc-dir') . "/{$page}";
        if (\File::extension($filePath) === "") {
            $filePath .= ".json";
        }
        if (!\File::Exists($filePath)) {
            \App::abort(404, "Cannot find {$filePath}");
        }
        $content = \File::get($filePath);
        $response = response($content, 200, array(
            'Content-Type' => 'application/json'
        ));
        return $response;
    }
}

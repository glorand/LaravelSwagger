<?php

namespace Glorand\LaravelSwagger\Http\Controllers;

use App\Http\Controllers\Controller;
use Glorand\LaravelSwagger\Services\Auth;
use Illuminate\Support\Facades\Config;

class AuthController extends Controller
{

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function getIndex()
    {
        if ($this->auth->isLoggedIn()) {
            return redirect(Config::get('laravel-swagger.swagger-route'));
        }
        return view('laravel-swagger::login');
    }

    public function postLogin()
    {
        $this->auth->login();
        return redirect(Config::get('laravel-swagger.swagger-route'));
    }

    public function getLogout()
    {
        $this->auth->logout();
        return redirect(Config::get('laravel-swagger.swagger-route'));
    }
}

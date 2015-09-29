<?php
/**
 * Created by PhpStorm.
 * User: gomby
 * Date: 9/29/15
 * Time: 4:07 PM
 */

namespace Glorand\LaravelSwagger\Services;


use Illuminate\Support\Facades\Session;

class Auth
{
    public function isLoggedIn()
    {
        if (1 === Session::get('laravel-swagger.logged_in')) {
            return true;
        }
        return false;
    }

    public function login()
    {
        Session::put('laravel-swagger.logged_in', 1);
    }

    public function logout()
    {
        Session::forget('laravel-swagger.logged_in');
    }

}
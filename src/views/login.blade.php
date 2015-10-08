@extends('laravel-swagger::layouts.app')

@section('content')
    <div class="container">
        <div class="wrapper">
            <form class="form-signin" action="{{Config::get('laravel-swagger.swagger-route')}}-auth/login"
                  method="post">
                <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
                <hr class="colorgraph">
                <br>
                @if(Session::has('error'))
                    <div class="alert-box success">
                        <h2>{{ Session::get('error') }}</h2>
                    </div>
                @endif
                <input type="text" class="form-control" name="username" placeholder="Username" required=""
                       autofocus=""/>
                <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-lg btn-success btn-block" name="Submit" value="Login" type="Submit">
                    <i class="glyphicon glyphicon-user"></i> Sign In
                </button>
                <p class="text-center text-success">
                    <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to mak</small>
                </p>
            </form>
        </div>
    </div>
@endsection
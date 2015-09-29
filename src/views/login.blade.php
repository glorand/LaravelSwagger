<!doctype html>
<html>
<head>

</head>
<body>
<form action="{{Config::get('laravel-swagger.swagger-route')}}-auth/login/" method="post">
    <h1>Login</h1>
    @if(Session::has('error'))
        <div class="alert-box success">
            <h2>{{ Session::get('error') }}</h2>
        </div>
    @endif
    <div class="controls">
        <input type="text" name="name" id="name">

        <p class="errors">{{$errors->first('email')}}</p>
    </div>
    <div class="controls">
        <input type="text" name="password" id="password">

        <p class="errors">{{$errors->first('password')}}</p>
    </div>
    <input name="_token" value="{{ csrf_token() }}">

    <p><input type="submit"></p>
</form>
</body>
</html>
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
?>

        <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="icon" type="image/png" href="{{$publicUrl}}/images/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{$publicUrl}}/images/favicon-16x16.png" sizes="16x16"/>

    <link href='{{$publicUrl}}/css/typography.css' media='screen' rel='stylesheet' type='text/css'/>
    <link href='{{$publicUrl}}/css/reset.css' media='screen' rel='stylesheet' type='text/css'/>
    <link href='{{$publicUrl}}/css/screen.css' media='screen' rel='stylesheet' type='text/css'/>
    <link href='{{$publicUrl}}/css/reset.css' media='print' rel='stylesheet' type='text/css'/>
    <link href='{{$publicUrl}}/css/print.css' media='print' rel='stylesheet' type='text/css'/>
    <script src='{{$publicUrl}}/lib/jquery-1.8.0.min.js' type='text/javascript'></script>
    <script src='{{$publicUrl}}/lib/jquery.slideto.min.js' type='text/javascript'></script>
    <script src='{{$publicUrl}}/lib/jquery.wiggle.min.js' type='text/javascript'></script>
    <script src='{{$publicUrl}}/lib/jquery.ba-bbq.min.js' type='text/javascript'></script>
    <script src='{{$publicUrl}}/lib/handlebars-2.0.0.js' type='text/javascript'></script>
    <script src='{{$publicUrl}}/lib/underscore-min.js' type='text/javascript'></script>
    <script src='{{$publicUrl}}/lib/backbone-min.js' type='text/javascript'></script>
    <script src='{{$publicUrl}}/swagger-ui.js' type='text/javascript'></script>
    <script src='{{$publicUrl}}/lib/highlight.7.3.pack.js' type='text/javascript'></script>
    <script src='{{$publicUrl}}/lib/marked.js' type='text/javascript'></script>
    <script src='{{$publicUrl}}/lib/swagger-oauth.js' type='text/javascript'></script>
</head>
<body class="swagger-section">
    @yield('content')
</body>
</html>
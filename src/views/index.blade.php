@extends('laravel-swagger::layouts.app')

@section('content')
    <div id='header'>
        <div class="swagger-ui-wrap">
            <a id="logo" href="http://swagger.io">swagger</a>

            <form id='api_selector'>
                <div class='input'><input placeholder="http://example.com/api" id="input_baseUrl" name="baseUrl"
                                          type="text"/></div>
                <div class='input'><input placeholder="api_key" id="input_apiKey" name="apiKey" type="text"/></div>
                <div class='input'><a id="explore" href="#" data-sw-translate>Explore</a></div>
            </form>
        </div>
    </div>

    <div id="message-bar" class="swagger-ui-wrap" data-sw-translate>&nbsp;</div>
    <div id="swagger-ui-container" class="swagger-ui-wrap"></div>
    @include('laravel-swagger::partials.app_js')
@endsection
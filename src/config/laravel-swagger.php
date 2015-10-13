<?php
return [
    'swagger-route' => 'swagger',
    /*
      |--------------------------------------------------------------------------
      | Absolute path to location where parsed swagger annotations will be stored
      |--------------------------------------------------------------------------
    */
    'doc-dir' => storage_path() . '/swagger',
    /*
      |--------------------------------------------------------------------------
      | Relative path to access parsed swagger annotations.
      |--------------------------------------------------------------------------
    */
    'doc-route' => 'swagger/docs',

    'apis' => [
        [
            'name' => 'Api 1',
            'key' => 'api_1',
            'app-dir' => 'vendor/zircote/swagger-php/Examples/petstore.swagger.io',
            "generateAlways" => true,
            'excludes' => [],
            'api-key' => 'access_token_1'
        ],
        [
            'name' => 'Api 2',
            'key' => 'api_2',
            'app-dir' => 'vendor/zircote/swagger-php/Examples/petstore.swagger.io',
            "generateAlways" => true,
            'excludes' => [],
            'api-key' => 'access_token_2'
        ]
    ],
    /*
      |--------------------------------------------------------------------------
      | Absolute path to directory containing the swagger annotations are stored.
      |--------------------------------------------------------------------------
    */
    "app-dir" => "vendor/zircote/swagger-php/Examples/petstore.swagger.io",
    /*
      |--------------------------------------------------------------------------
      | Absolute path to directories that you would like to exclude from swagger generation
      |--------------------------------------------------------------------------
    */
    "excludes" => array(
        storage_path(),
        base_path()."/tests",
        base_path()."/resources/views",
        base_path()."/config",
        base_path()."/vendor"
    ),
    /*
      |--------------------------------------------------------------------------
      | Turn this off to remove swagger generation on production
      |--------------------------------------------------------------------------
    */
    "generateAlways" => true,

    "api-key" => "access_token",
];
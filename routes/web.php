<?php

$router->get('/', function () {
    return 'BoomBang API';
});
$router->group([
    'prefix' => 'api',
], function () use ($router) {
    $router->group([
        'prefix' => 'web'
    ], function () use ($router) {
        $router->group([
            'prefix' => 'auth'
        ], function () use ($router) {
            $router->post('login', 'Auth\AuthController@login');
            $router->post('logout', 'Auth\AuthController@logout');
            $router->post('verify', 'Auth\AuthController@verify');
        });
    });
    $router->group([
        'prefix' => 'launcher'
    ], function () use ($router) {
    });
    $router->group([
        'prefix' => 'game',
    ], function () use ($router) {
        $router->group([
            'prefix' => 'user',
            'middleware' => 'auth:api'
        ], function () use ($router) {
            $router->post('/', 'Game\UserController@index');
        });
        $router->group([
            'prefix' => 'loaders',
            //'middleware' => 'localhost'
        ], function () use ($router) {
            $router->get('sceneries', 'Game\Loaders\SceneryLoaderController@index');
            $router->get('areas', 'Game\Loaders\SceneryAreaLoaderController@index');
        });
    });
});

<?php

$router->get('/', function () {
    return 'BoomBang API';
});
$router->group([
    'prefix' => 'api',
], function () use ($router) {
    $router->group([
        'prefix' => 'auth'
    ], function () use ($router) {
        $router->post('login', 'Auth\AuthController@login');
        $router->post('logout', 'Auth\AuthController@logout');
        $router->post('verify', 'Auth\AuthController@verify');
    });
    $router->group([
        'prefix' => 'game',
        'middleware' => 'auth:api'
    ], function () use ($router) {
        $router->post('user', 'Game\UserController@index');
    });
    $router->group([
        'prefix' => 'loaders',
        //'middleware' => 'localhost'
    ], function () use ($router) {
        $router->get('sceneries', 'Loaders\SceneryLoaderController@index');
        $router->get('areas', 'Loaders\SceneryAreaLoaderController@index');
    });
});

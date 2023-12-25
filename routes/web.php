<?php

$router->get('/', function () {
    return 'BoomBang API';
});
$router->group([
    'prefix' => 'api',
    'middleware' => 'cors'
], function () use ($router) {
    $router->group([
        'prefix' => 'auth'
    ], function () use ($router) {
        $router->post('login', 'Auth\AuthController@login');
        $router->post('logout', 'Auth\AuthController@logout');
    });
    $router->group([
        'prefix' => 'game',
        'middleware' => 'auth:api'
    ], function () use ($router) {
        $router->post('user', 'Game\UserController@index');
    });
    $router->group([
        'prefix' => 'loaders',
    ], function () use ($router) {
        $router->get('sceneries', 'Loaders\SceneryLoaderController@index');
        $router->get('areas', 'Loaders\SceneryAreaLoaderController@index');
    });
});

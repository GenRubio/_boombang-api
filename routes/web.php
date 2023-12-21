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
        $router->post('refresh', 'Auth\AuthController@refresh');
        $router->post('user-profile', 'Auth\AuthController@me');
    });
    $router->group([
        'prefix' => 'game',
        'middleware' => 'auth:api'
    ], function () use ($router) {
        $router->post('user', 'Game\UserController@index');
    });
});

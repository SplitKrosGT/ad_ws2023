<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('add', "WsController@add");

$router->get('ad/{ws_id}', "WsController@get");

$router->post('edit/{ws_id}', "WsController@edit");

$router->get('delete/{ws_id}', "WsController@delete");

$router->get('ads', "WsController@showAll");
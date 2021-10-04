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

//use App\Http\Controllers\Auth\AuthController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// API route group
$router->group(['prefix' => 'api'], function () use ($router) {
    // Matches "/api/register
    $router->post('register',
        [
            'as' => 'register', 'uses' => "\\".\App\Http\Controllers\Auth\AuthController::class . '@register'
        ]);

    $router->post('login',
        [
            'as' => 'login', 'uses' => "\\".\App\Http\Controllers\Auth\AuthController::class . '@login'
        ]);

});

$router->group(['prefix' => 'api','middleware' => 'auth:api'], function () use ($router) {
    $router->get('me', [
        'middleware' => 'auth',
        'uses' => "\\".\App\Http\Controllers\Auth\AuthController::class . '@me'
    ]);
});


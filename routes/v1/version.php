<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(
    ['prefix' => 'api'],
    function () use ($router) {
        $router->get(
            '/version',
            [
                'as' => 'questionBank.store',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\VersionController::class . '@index'
            ]
        );
        $router->post(
            '/version',
            [
                'as' => 'questionBank.store',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\VersionController::class . '@store'
            ]
        );
        $router->get(
            '/version/{id}',
            [
                'as' => 'questionBank.store',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\VersionController::class . '@show'
            ]
        );
        $router->put(
            '/version/{id}',
            [
                'as' => 'questionBank.store',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\VersionController::class . '@update'
            ]
        );
    }
);


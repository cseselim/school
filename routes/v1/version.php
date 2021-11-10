<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(
    ['prefix' => 'api'],
    function () use ($router) {
        $router->get(
            '/version',
            [
                'as' => 'version.index',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\VersionController::class . '@index'
            ]
        );
        $router->post(
            '/version',
            [
                'as' => 'version.store',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\VersionController::class . '@store'
            ]
        );
        $router->get(
            '/version/{id}',
            [
                'as' => 'version.show',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\VersionController::class . '@show'
            ]
        );
        $router->put(
            '/version/{id}',
            [
                'as' => 'version.update',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\VersionController::class . '@update'
            ]
        );
        $router->delete(
            '/version/{id}',
            [
                'as' => 'version.destroy',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\VersionController::class . '@destroy'
            ]
        );
    }
);


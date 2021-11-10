<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(
    ['prefix' => 'api'],
    function () use ($router) {
        $router->get(
            '/classes',
            [
                'as' => 'classes.index',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\ClassController::class . '@index'
            ]
        );
        $router->post(
            '/classes',
            [
                'as' => 'classes.store',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\ClassController::class . '@store'
            ]
        );
        $router->get(
            '/classes/{id}',
            [
                'as' => 'classes.show',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\ClassController::class . '@show'
            ]
        );
        $router->put(
            '/classes/{id}',
            [
                'as' => 'classes.update',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\ClassController::class . '@update'
            ]
        );
        $router->delete(
            '/classes/{id}',
            [
                'as' => 'classes.destroy',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\ClassController::class . '@destroy'
            ]
        );
    }
);


<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(
    ['prefix' => 'api'],
    function () use ($router) {
        $router->get(
            '/subject',
            [
                'as' => 'subject.index',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\SubjectController::class . '@index'
            ]
        );
        $router->post(
            '/subject',
            [
                'as' => 'subject.store',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\SubjectController::class . '@store'
            ]
        );
        $router->get(
            '/subject/{id}',
            [
                'as' => 'subject.show',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\SubjectController::class . '@show'
            ]
        );
        $router->put(
            '/subject/{id}',
            [
                'as' => 'subject.update',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\SubjectController::class . '@update'
            ]
        );
        $router->delete(
            '/subject/{id}',
            [
                'as' => 'subject.destroy',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\SubjectController::class . '@destroy'
            ]
        );
    }
);


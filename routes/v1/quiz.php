<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(
    ['prefix' => 'api'],
    function () use ($router) {
        $router->post(
            '/quiz',
            [
                'as' => 'questionBank.store',
                'uses' => '\\' . \App\Http\Controllers\Modules\Quiz\QuizController::class . '@store'
            ]
        );
    }
);


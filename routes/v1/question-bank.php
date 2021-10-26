<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(
    ['prefix' => 'api'],
    function () use ($router) {
        $router->post(
            '/question-bank',
            [
                'as' => 'questionBank.store',
                'uses' => '\\' . \App\Http\Controllers\Modules\QuestionBank\QuestionBankController::class . '@store'
            ]
        );
    }
);


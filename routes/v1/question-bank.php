<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(
    ['prefix' => 'question-bank', 'middleware' => 'auth'],
    function () use ($router) {
//        $router->get(
//            '/',
//            [
//                'as' => 'questionBank.index',
//                'uses' => '\\' . \App\Http\Controllers\Modules\QuestionBank\QuestionBankController::class . '@index'
//            ]
//        );
//
//        $router->get(
//            '/{id}',
//            [
//                'as' => 'questionBank.detail',
//                'uses' => '\\' . \App\Http\Controllers\Modules\QuestionBank\QuestionBankController::class . '@show'
//            ]
//        );
//
//        $router->post(
//            '/',
//            [
//                'as' => 'questionBank.store',
//                'uses' => '\\' . \App\Http\Controllers\Modules\QuestionBank\QuestionBankController::class . '@store'
//            ]
//        );
//
//        $router->put(
//            '/{id}',
//            [
//                'as' => 'questionBank.update',
//                'uses' => '\\' . \App\Http\Controllers\Modules\QuestionBank\QuestionBankController::class . '@update'
//            ]
//        );
    }
);

//$router->group(
//    ['prefix' => 'question-level', 'middleware' => 'auth'],
//    function () use ($router) {
//        $router->get(
//            '/',
//            [
//                'as' => 'questionLevel.index',
//                'uses' => '\\' . \App\Http\Controllers\Modules\QuestionBank\QuestionLevelController::class . '@index'
//            ]
//        );
//    }
//);

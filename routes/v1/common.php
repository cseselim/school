<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(
    ['prefix' => 'api'],
    function () use ($router) {
        $router->post(
            '/upload',
            [
                'as' => 'file.store',
                'uses' => '\\' . \App\Http\Controllers\Modules\Common\FileUploadController::class . '@store'
            ]
        );
    }
);


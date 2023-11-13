<?php

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

define('VIEW_PATH', __DIR__ . '/../views');

try {
    $router = new App\Router();

    $router
        ->get('/', [App\Controllers\HomeController::class, 'index'])
        ->get('/students', [App\Controllers\StudentController::class, 'index'])
        ->get('/students/create', [App\Controllers\StudentController::class, 'create'])
        ->post('/students/create', [App\Controllers\StudentController::class, 'store']);

    echo $router->resolve(
        $_SERVER['REQUEST_URI'],
        strtolower($_SERVER['REQUEST_METHOD'])
    );
} catch(\App\Exceptions\RouteNotFoundException $e) {
//    header('HTTP/1.1 404 Not Found');
    http_response_code(404);
    echo App\View::make('error/404');
}

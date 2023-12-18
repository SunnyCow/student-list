<?php

use App\App;
use App\Controllers\StudentController;
use App\Router;
use App\Config;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('VIEW_PATH', __DIR__ . '/../views');

$router = new Router();

$router
    ->get('/', [StudentController::class, 'index'])
    ->get('/create', [StudentController::class, 'create'])
    ->post('/create', [StudentController::class, 'store']);

(new App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    new Config($_ENV)
))->run();

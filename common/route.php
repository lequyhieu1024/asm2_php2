<?php

use App\Controllers\CategoriesController;
use App\Controllers\ProductsController;
use App\Controllers\UsersController;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function () {
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});

$router->get('/', [UsersController::class, 'index']);
$router->get('add-user', [UsersController::class, 'create']);
$router->post('add-user', [UsersController::class, 'store']);
$router->get('update-user/{id}', [UsersController::class, 'edit']);
$router->post('update-user/{id}', [UsersController::class, 'update']);
$router->get('delete-user/{id}', [UsersController::class, 'destroy']);

$router->group(['prefix' => '/categories'], function ($router) {
    $router->get('/', [CategoriesController::class, 'index']);
    $router->get('add-category', [CategoriesController::class, 'create']);
    $router->post('add-category', [CategoriesController::class, 'store']);
    $router->get('update-category/{id}', [CategoriesController::class, 'edit']);
    $router->post('update-category/{id}', [CategoriesController::class, 'update']);
    $router->get('delete-category/{id}', [CategoriesController::class, 'destroy']);
});

$router->group(['prefix' => 'products'], function ($router) {
    $router->get('/', [ProductsController::class, 'index']);
    $router->get('add-product', [ProductsController::class, 'create']);
    $router->post('add-product', [ProductsController::class, 'store']);
    $router->get('update-product/{id}', [ProductsController::class, 'edit']);
    $router->post('update-product/{id}', [ProductsController::class, 'update']);
    $router->get('delete-product/{id}', [ProductsController::class, 'destroy']);
});

$dispatcher = new Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;

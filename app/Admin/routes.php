<?php

use App\Admin\Controllers\HomeController;
use App\Admin\Controllers\UserController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', [HomeController::class, 'index'])->name('home');
    $router->get('/users/form', [UserController::class, 'former'])->name('form');
    $router->resource('users', UserController::class);
    $router->resource('names', MyNameController::class);
});

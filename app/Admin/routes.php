<?php

// AdminとRouteに "Undefined type" エラーが出たため教材にはないが、use宣言を追記
use Illuminate\Support\Facades\Route;
use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use App\Admin\Controllers\CategoryController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('categories', CategoryController::class);

});

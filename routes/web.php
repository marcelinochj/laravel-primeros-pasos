<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Middleware\TestMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([TestMiddleware::class])->group(function () {
    Route::get('/test/{id?}/{name?}', function ($id = 10, $name = 'pepe') {
        echo $id;
        echo $name;
    });
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class
    ]);
});

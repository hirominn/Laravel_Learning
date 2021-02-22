<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HelloController;
// use App\Http\Middleware\HelloMiddleware;
// Route::get('hello', [HelloController::class, 'Index']); //記法::https://qiita.com/norichintnk/items/34a04cd17bfe4014313a
Route::get('hello', [HelloController::class, 'index']);

Route::post('hello', [HelloController::class, 'post']);

Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);

Route::get('hello/edit', [HelloController::class, 'edit']);
Route::post('hello/edit', [HelloController::class, 'update']);

Route::get('hello/del', [HelloController::class, 'del']);
Route::post('hello/del', [HelloController::class, 'remove']);

Route::get('hello/show', [HelloController::class, 'show']);

use App\Http\Controllers\TeamController;

Route::get('team', [TeamController::class, 'index']);

Route::get('team/find', [TeamController::class, 'find']);
Route::post('team/find', [TeamController::class, 'search']);

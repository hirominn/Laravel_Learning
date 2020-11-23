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
// Route::get('hello', [HelloController::class, 'Index']); //記法::https://qiita.com/norichintnk/items/34a04cd17bfe4014313a
Route::get('hello', [HelloController::class, 'index']);

Route::post('hello', [HelloController::class, 'post']);

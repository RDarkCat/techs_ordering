<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\UserController;
use App\Http\Controllers\Api\PromoController;
use App\Http\Controllers\Api\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('auth')->as('auth.')->namespace('Auth')->group(function () {
    Route::post('login', [LoginController::class, 'index']);
    Route::post('register', [RegisterController::class, 'index']);
    Route::post('logout', [LogoutController::class, 'index']);

    Route::get('user', [UserController::class, 'index']);
});

Route::prefix('promos')->as('promos.')->group(function () {
    Route::post('/', [PromoController::class, 'index']);
    Route::get('/show/{id}', [PromoController::class, 'show']);
    Route::get('/category/{id}', [PromoController::class, 'byCategory']);
    Route::get('/categories/', [PromoController::class, 'categories']);
    Route::get('/tags/', [PromoController::class, 'tags']);
    Route::get('/delete/{id}', [PromoController::class, 'delete'])->name('delete');
    Route::post('/store', [PromoController::class, 'store']);
});

Route::resource('orders', OrderController::class);
Route::prefix('orders')->as('orders.')->group(function () {
    Route::get('/ordersOfLessor', [OrderController::class, 'ordersOfLessor'])->name('ordersOfLessor');
});


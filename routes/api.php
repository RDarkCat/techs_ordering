<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\UserController;
use App\Http\Controllers\Api\PromoController;
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

Route::resource('promos', PromoController::class)->except(['index', 'show']);
Route::prefix('promos')->as('promos.')->group(function () {
    Route::get('/', [PromoController::class, 'index']);
    Route::get('/show/{id}', [PromoController::class, 'show']);
    Route::get('/category/{id}', [PromoController::class, 'byCategory']);
    Route::get('/categories/', [PromoController::class, 'categories']);
    Route::get('/tags/', [PromoController::class, 'tags']);
});

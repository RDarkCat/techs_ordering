<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MachinesController;
use App\Http\Controllers\UsersController;
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
Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('items')->as('machines.')->group(function () {
    Route::get('/', [MachinesController::class, 'index'])->name('index');
    Route::get('/{machines}', [MachinesController::class, 'show'])->name('show');
});

Route::get('/users', [UsersController::class, 'index'])->name('users');


Route::get('/admin', [AdminController::class, 'index'])->name('admin');

<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PromoController;
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


Route::get('{any}', function () {
    return view('api');
})->name('api_test');
//
//Route::get('api_test', function () {
//    return view('api');
//})->name('api_test');
//
//Route::get('/', [IndexController::class, 'index'])->name('home');
//Route::resource('items', ItemsController::class)->except(['index', 'show']);
//Route::prefix('items')->as('items.')->group(function () {
//    Route::get('/usersItems', [ItemsController::class, 'usersItems'])->name('usersItems');
//    Route::get('/delete/{item_id}', [ItemsController::class, 'delete'])->name('delete');
//    Route::get('/', [ItemsController::class, 'index'])->name('index');
//    Route::get('/{items}', [ItemsController::class, 'show'])->name('show');
//
//});
//
//Route::prefix('promos')->as('promos.')->group(function () {
//    Route::get('/', [PromoController::class, 'index'])->name('index');
//    Route::get('/{promos}', [PromoController::class, 'show'])->name('show');
//    Route::post('/search/categories', [PromoController::class, 'byCategory'])->name('search');
//});
//
//Route::get('/users', [UsersController::class, 'index'])->name('users');
//
//Route::get('/admin', [AdminController::class, 'index'])->name('admin');
//
//Route::get('/ads', [ItemsController::class, 'index']);
//
//Route::resource('orders', OrderController::class);
//
//Route::get('/demo_lessor', function(){
//    return view('lessorProfileDemo');
//})->name('demo_lessor'); // временный роут
//
////Route::get('/', [MachineController::class, 'machinesFullInformation'])->name('HomePage');
//// Route::get('/machine_types/{type_id}', [MachineTypeController::class, 'getMachinesByType'])
//// ->name('machinesTypes.getMachinesByType'); // клик на категорию
//// Route::resource('/machines', MachineController::class);
//// Route::resource('/machines_types', MachineTypeController::class);
////
//// Route::prefix('machinesTypes')->group(function () {
////     Route::get('/', [MachinesTypesController::class, 'index'])->name('machinesTypes');
////     Route::get('/{machinesTypes}', [MachinesTypesController::class, 'show'])->name('showMachinesTypes');
//// });

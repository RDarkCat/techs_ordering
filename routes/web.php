<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\CheckIsAdmin;
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

Route::middleware([CheckIsAdmin::class])->group(function () {
    Route::prefix('adminPanel')->as('adminPanel.')->group(function () {
        Route::get('/', [AdminPanelController::class, 'index'])->name('index');
        Route::get('/tagsByParent/{parent_id?}', [AdminPanelController::class, 'tagsByParent'])->name('tagsByParent');
        Route::get('/promosIndex', [AdminPanelController::class, 'promosIndex'])->name('promosIndex');
        Route::get('/itemsIndex', [AdminPanelController::class, 'itemsIndex'])->name('itemsIndex');

        Route::resource('users', UsersController::class);

        Route::resource('tags', TagController::class);
        Route::post('tags/delete/{tag}', [TagController::class, 'delete'])->name('tags.delete');

        Route::resource('promos', PromoController::class);
        Route::post('promos/delete/{promo}', [PromoController::class, 'delete'])->name('promos.delete');

        Route::resource('items', ItemsController::class);
        Route::post('items/delete/{item}', [ItemsController::class, 'delete'])->name('items.delete');
    });
});

Route::get('{any}', function () {
    return view('api');
})->where('any', ".*");

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

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MachinesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/ads', [ItemController::class, 'index']);
//Route::get('/', [MachineController::class, 'machinesFullInformation'])->name('HomePage');
// Route::get('/machine_types/{type_id}', [MachineTypeController::class, 'getMachinesByType'])
// ->name('machinesTypes.getMachinesByType'); // клик на категорию
// Route::resource('/machines', MachineController::class);
// Route::resource('/machines_types', MachineTypeController::class);
// =======
// Route::prefix('machinesTypes')->group(function () {
//     Route::get('/', [MachinesTypesController::class, 'index'])->name('machinesTypes');
//     Route::get('/{machinesTypes}', [MachinesTypesController::class, 'show'])->name('showMachinesTypes');
// });

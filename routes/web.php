<?php

use App\Http\Controllers\MachineController;
use App\Http\Controllers\MachineTypeController;
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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/ads', function() {
    return view('adsList');
});
Route::get('/', [MachineController::class, 'machinesFullInformation'])->name('HomePage');
Route::get('/machine_types/{type_id}', [MachineTypeController::class, 'getMachinesByType'])
    ->name('machinesTypes.getMachinesByType'); // клик на категорию
Route::resource('/machines', MachineController::class);
Route::resource('/machines_types', MachineTypeController::class);

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\MachinesController;
use App\Http\Controllers\MachinesTypesController;
use App\Http\Controllers\OwnersController;
use App\Http\Controllers\RegionsController;
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

Route::prefix('countries')->group(function () {
    Route::get('/', [CountriesController::class, 'index'])->name('countries');
    Route::get('/{countries}', [CountriesController::class, 'show'])->name('showCountry');
});

Route::prefix('regions')->group(function () {
    Route::get('/', [RegionsController::class, 'index'])->name('regions');
    Route::get('/{regions}', [RegionsController::class, 'show'])->name('showRegion');
});

Route::prefix('cities')->group(function () {
    Route::get('/', [CitiesController::class, 'index'])->name('cities');
    Route::get('/{cities}', [CitiesController::class, 'show'])->name('showCity');
});

Route::prefix('machines')->group(function () {
    Route::get('/', [MachinesController::class, 'index'])->name('machines');
    Route::get('/{machines}', [MachinesController::class, 'show'])->name('showMachine');
});

Route::prefix('machinesTypes')->group(function () {
    Route::get('/', [MachinesTypesController::class, 'index'])->name('machinesTypes');
    Route::get('/{machinesTypes}', [MachinesTypesController::class, 'show'])->name('showMachinesTypes');
});

Route::get('/users', [UsersController::class, 'index'])->name('users');

Route::get('/owners', [OwnersController::class, 'index'])->name('owners');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laravel_example\UserManagement;


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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::group(['prefix' => 'dashboard'], function (){
    Route::group(['prefix' => 'tickets'], function (){
        Route::get('/', [\App\Http\Controllers\TicketsController::class, 'index'])->name('tickets.index');
    });
    Route::group(['prefix' => 'users'], function (){
        Route::get('/', [\App\Http\Controllers\ProfileUserController::class, 'index'])->name('profile-users.index');
    });
    Route::group(['prefix' => 'properties'], function (){
        Route::get('/', [\App\Http\Controllers\PropertiesController::class, 'index'])->name('properties.index');
    });
    Route::group(['prefix' => 'cities'], function (){
        Route::get('/', [\App\Http\Controllers\CitiesController::class, 'index'])->name('cities.index');
    });
    Route::group(['prefix' => 'states'], function (){
        Route::get('/', [\App\Http\Controllers\StatesController::class, 'index'])->name('states.index');
    });
    Route::group(['prefix' => 'countries'], function (){
        Route::get('/', [\App\Http\Controllers\CountriesController::class, 'index'])->name('countries.index');
    });
});

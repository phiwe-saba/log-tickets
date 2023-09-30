<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

/* Department */
Route::get('/department/index', 'App\Http\Controllers\DepartmentController@index')->name('department.index');
Route::get('/department/create', 'App\Http\Controllers\DepartmentController@create')->name('department.create');

/* Status */
Route::get('/status/index', 'App\Http\Controllers\StatusController@index')->name('status.index');
Route::get('/status/index', 'App\Http\Controllers\StatusController@create')->name('status.create');
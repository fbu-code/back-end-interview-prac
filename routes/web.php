<?php

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

Route::get('/', fn() => redirect('/products'));
Route::get('/products', 'App\Http\Controllers\ProductController@index');
Route::post('/products/new', 'App\Http\Controllers\ProductController@new');
Route::post('/products/delete', 'App\Http\Controllers\ProductController@delete');

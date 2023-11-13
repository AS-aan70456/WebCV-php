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

Route::get('/','App\Http\Controllers\HomeController@index')->name('home');
Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');
Route::get('/posts','App\Http\Controllers\ArticalController@index')->name('posts');
Route::get('/projects','App\Http\Controllers\ProjectController@index')->name('projects');
Route::get('/CV','App\Http\Controllers\CVControlle@index')->name('CV');
Route::get('/about','App\Http\Controllers\AboutController@index')->name('about');

Route::get('/acount','App\Http\Controllers\HomeController@index')->name('register');
Route::get('/acount/register','App\Http\Controllers\HomeController@index')->name('register.index');
Route::get('/acount/login','App\Http\Controllers\HomeController@index')->name('login.index');


Route::get('/','App\Http\Controllers\HomeController@index')->name('Home.index');

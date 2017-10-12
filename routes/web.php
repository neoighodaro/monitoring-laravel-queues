<?php

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

Auth::routes();
Route::name('jobs')->get('/jobs', 'HomeController@jobs');
Route::name('simulate')->get('/simulate', 'HomeController@simulate');
Route::name('home')->get('/home', 'HomeController@index');
Route::view('/', 'welcome');

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('positions', 'JabController@index');
Route::get('positions/create', 'JabController@create');
Route::get('positions/{position:jabatan}/edit', 'JabController@edit');
Route::patch('positions/{postion:jabatan}/edit', 'JabController@update');


Route::post('positions/store', 'JabController@store');
Route::get('positions/{position:jabatan}', 'JabController@show');

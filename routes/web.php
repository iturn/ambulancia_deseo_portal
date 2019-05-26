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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users', 'UserController@index');

Route::get('whishes', 'WhishController@index');
Route::get('whishes/create', 'WhishController@create');
Route::get('whishes/{id}', 'WhishController@show');
Route::patch('whishes/{id}', 'WhishController@update');
Route::post('whishes', 'WhishController@store');

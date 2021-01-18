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

Route::get('/greetings', function() {
    return json_encode(array('greetings' => 'Hello from Laravel'));
});

Route::get('/democontroller', 'Democontroller@someFunction');
Route::get('/index', 'TargetController@index');
Route::get('/create', 'TargetController@create');
Route::get('/edit', 'TargetController@edit');

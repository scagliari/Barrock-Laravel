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

Route::get('/', function () {
    return view('index');
});

Route::get('preguntas', function () {
    return view('preguntas');
});

Route::get('contacto', function () {
    return view('contacto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/crear','HomeController@crear');

Route::post('/crear', 'ProductController@store');

Route::get('/products/{id}', 'ProductController@destroy');

Route::delete('/products/{id}', 'ProductController@destroy');

Route::get('/products', 'ProductController@index');

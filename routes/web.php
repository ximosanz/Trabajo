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
    return view('welcome');
});

Route::get('/hello',function ()
{
    return "Hola mundo";
});
Route::get('/hello/{name}',function ($name)
{
    return "Hola $name";
});
Route::get('/hola','HolaController@holamundo');
Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/captchaForm', 'CaptchaController@captchaForm');
Route::get('/books/pdf','BookController@export_pdf');
Route::post('/storeCaptchaForm', 'CaptchaController@storeCaptchaForm');
//Route::get('books', 'BookController@index');
//Route::get('books/create', 'BookController@create');
//Route::get('books/{id}', 'BookController@show');
Route::get('books/forget','BookController@forget');
Route::resource('books','BookController');

Route::resource('places','PlaceController');
Route::get('places/{id}/json','PlaceController@showJson');
Route::resource('editorials','EditorialController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

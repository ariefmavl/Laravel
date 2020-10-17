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

Route::get('Hello', function() {
    return "Hello, This is My Training Laravel. Love You!";
});

Route::get('Training', function() {
    return view('Training');
});
// Route Controller
Route::get('arief', 'AriefController@index');
Route::get('/aliev/{nama}', 'AlievController@index');

Route::get('/formulir', 'AlievController@formulir');
Route::post('/formulir/proses', 'AlievController@proses');

// Route Blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/about', 'BlogController@about');
Route::get('/blog/contact', 'BlogController@contact');
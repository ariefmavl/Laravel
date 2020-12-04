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

//route blog
Route::get('/blog', 'BlogController@home');
Route::get('blog/about', 'BlogController@about');
Route::get('/blog/contact', 'BlogController@contact');
Route::get('/blog/crew', 'BlogController@crew');

//Route CRUD
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/add', 'MahasiswaController@add');
Route::post('/mahasiswa/store', 'MahasiswaController@store');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::post('/mahasiswa/update', 'MahasiswaController@update');
Route::get('/mahasiswa/delete/{id}', 'MahasiswaController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

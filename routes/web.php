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

Route::get('/home', function () {
    return view('adm.index');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/tes', function () {
    return view('tes');
});

Route::get('/login', function(){
    return redirect('/auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'AuthController@logout');

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'AuthController@logout');

Route::resource('akuntansi', 'akuntansiController')->middleware('auth');
Route::get('/akuntansis/export_excel', 'akuntansiController@export_excel')->middleware('auth');
Route::resource('level', 'LevelController')->middleware('auth');
Route::resource('user', 'UserController')->middleware('auth');


Route::get('/server/{id}/aplikasi', 'serverController@aplikasi');

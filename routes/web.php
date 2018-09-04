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

Route::get('/Accueil', function () {
    return view('Accueil');
});

Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('cvs', 'Cvcontoller@index');
Route::get('cvs/create', 'Cvcontoller@create');
Route::post('cvs', 'Cvcontoller@store');
Route::get('cvs/{id}/edit', 'Cvcontoller@edit');
Route::put('cvs/{id}', 'Cvcontoller@update');
Route::delete('cvs/{id}', 'Cvcontoller@destroy');

Auth::routes();






Route::get('/home', 'HomeController@index')->name('home');
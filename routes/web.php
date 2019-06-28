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




Route::group(['prefix' => 'verifier'], function () {
    Route::get('/', 'VerifierController@index')->name('verifier');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::resource('/categories', 'CategoriesController');

Auth::routes();

Route::get('/', 'SchoolsController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/submit', 'HomeController@aftercategories');

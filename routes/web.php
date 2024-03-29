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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/newHome', function () {
//    return view('newHome');
//});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/get-cities/{id}', 'HomeController@getCity');
Route::get('products/{id}','HomeController@show');
Route::get('/artists/{letter}', 'HomeController@showArtist')->where('letter', '[A-Za-z]+')->name('list');
//Route::get('/autocomplete', 'HomeController@search')->name('autocomplete');
//Route::post('/autocomplete/fetch', 'HomeController@fetch')->name('autocomplete.fetch');
Route::get('/company', 'companyController@index')->name('add.company');
Route::get('/advertise', 'advertiseController@index')->name('advertise');
Route::get('/contact', 'contactController@index')->name('contact');
Route::get('/invest', 'investController@index')->name('invest');
Route::get('/bangladesh', 'bangladeshController@index')->name('bangladesh');
Route::get('/travel', 'travelController@index')->name('travel');
Route::get('/tuition', 'tuitionController@index')->name('tuition');
Route::get('/matrimony', 'matrimonyController@index')->name('matrimony');

Route::post('/company', 'companyController@store')->name('company.insert');
Route::get('/get-cities/{id}', 'companyController@getCity');
//Route::get('/allCity/{id}', 'HomeController@getCity');




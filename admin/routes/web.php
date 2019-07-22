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

Route::get('/logout', function () {
    Auth::logout();
});

Route::get('/', 'Auth\LoginController@show');

Auth::routes();

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/* Menu */

Route::get('/menu', 'MenuController@index')->name('menu.index');
Route::post('/menu-info', 'MenuController@showAllMenuInfo')->name('menu.showinfo');

Route::get('/menu-add', 'MenuController@create')->name('menu.addMenu');

Route::get('/menu-edit/{id}', 'MenuController@edit')->name('menu.edit');

Route::post('/menu-insert', 'MenuController@store')->name('menu.insert');

Route::post('/menu-update/{id}', 'MenuController@update')->name('menu.update');

Route::post('/menu-delete', 'MenuController@delete')->name('menu.delete');


/* category */

Route::get('/category', 'categoryController@index')->name('category.index');
Route::post('/category-info', 'categoryController@showAllMenuInfo')->name('category.showinfo');
Route::get('/category-add', 'categoryController@create')->name('category.addCategory');
Route::post('/category-insert', 'categoryController@store')->name('category.insert');
Route::get('/category-edit/{id}', 'categoryController@edit')->name('category.edit');
Route::post('/category-update/{id}', 'categoryController@update')->name('category.update');
Route::post('/category-delete', 'categoryController@delete')->name('category.delete');
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

Route::get('/', 'PagesController@index');

Route::get('/programs', 'PagesController@programs');

Route::get('/join', 'PagesController@join');

Route::get('/contact', 'PagesController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');

Route::get('/admin', 'DataController@adminData');

Route::get('/home', 'DataController@userData');

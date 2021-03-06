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

Auth::routes();


Route::view('/', 'welcome.welcome');

Route::view('apps','apps.home')->name('apps');
Route::view('outdoors','outdoors.home')->name('outdoors');
Route::view('missoula','missoula.home')->name('missoula');

Route::get('api/count','VisitApiController@count');
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider')->name('oauth-login');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('guestbook','GuestBookController@index')->name('guestbook');
Route::post('guestbook','GuestBookController@store');

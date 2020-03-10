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


// Route::get('/delete', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home')->middleware('auth'); //"contacts heb ik veranderd naar "/" want dat is hetzelfde & ->middleware('auth') toegevoeg voor fout in "logout"
/*Route::get('/delete', 'HomeController@index')->name('home');
Route::get('/add', 'HomeController@index')->name('home');
Route::get('/edit', 'HomeController@index')->name('home');*/ //tijdelijk non-actief wegens testing


// wat doet dat pijltje hierachter? fix me //->name('home')

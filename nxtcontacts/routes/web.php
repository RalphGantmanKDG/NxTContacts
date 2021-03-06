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


// Route::get('/delete', 'ContactsController@index')->name('home');+
Route::get('/contacts', 'ContactsController@index')->name('getContacts')->middleware('auth'); //"contacts heb ik veranderd naar "/" want dat is hetzelfde & ->middleware('auth') toegevoeg voor fout in "logout"
Route::get('/contacts/{id}/delete', 'ContactsController@delete')->name('deleteContact')->middleware('auth');
Route::get('/contacts/add', 'ContactsController@viewContactForm')->name('viewContactForm')->middleware('auth');
Route::post('/contacts/add', 'ContactsController@create')->name('addContact')->middleware('auth');
Route::get('/contacts/{id}/deleted', 'ContactsController@deleted')->name('deletedContact')->middleware('auth');
Route::get('/contacts/{id}/edit', 'ContactsController@edit')->name('viewEditContact')->middleware('auth');
Route::put('/contacts/edited', 'ContactsController@edit')->name('editContact')->middleware('auth');
Route::get('/contacts/edited', 'ContactsController@edited')->name('editedContact')->middleware('auth');
Route::get('/contacts/require', 'ContactsController@require')->name('require')->middleware('auth');
Route::get('/search', 'ContactsController@search')->name('require')->middleware('auth');



// wat doet dat pijltje hierachter? fix me //->name('home')


Route::get('/home', 'HomeController@index')->name('home');

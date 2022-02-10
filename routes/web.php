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
Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::get('/client','clientContoller@index')->name('client');
Route::get('/client/add','clientContoller@create')->name('client.add');
Route::POST('/client/store','clientContoller@store')->name('client.store');
Route::get('/client/delete/{id}','clientContoller@destroy')->name('client.destroy');
Route::get('/client/edit/{client}','clientContoller@edit')->name('client.edit');
Route::put('/client/update/{client}','clientContoller@update')->name('client.update');


Route::get('/home','HomeController@index')->name('home');
Route::get('/ticket','ticketContoller@index')->name('ticket');
Route::get('/ticket/add','ticketContoller@create')->name('ticket.add');
Route::post('/ticket/store','ticketContoller@store')->name('ticket.store');
Route::get('/ticket/delete/{id}','ticketContoller@destroy')->name('ticket.destroy');
Route::get('/ticket/edit/{ticket}','ticketContoller@edit')->name('ticket.edit');
Route::put('/ticket/update/{ticket}','ticketContoller@update')->name('ticket.update');


Route::get('/home','HomeController@index')->name('home');
Route::get('/guichet','guichetContoller@index')->name('guichet');
Route::get('/guichet/add','guichetContoller@create')->name('guichet.add');
Route::post('/guichet/store','guichetContoller@store')->name('guichet.store');
Route::get('/guichet/delete/{id}','guichetContoller@destroy')->name('guichet.destroy');
Route::get('/guichet/edit/{guichet}','guichetContoller@edit')->name('guichet.edit');
Route::put('/guichet/update/{guichet}','guichetContoller@update')->name('guichet.update');



Route::get('/home','HomeController@index')->name('home');
Route::get('/bus','busContoller@index')->name('bus');
Route::get('/bus/add','busContoller@create')->name('bus.add');
Route::post('/bus/store','busContoller@store')->name('bus.store');
Route::get('/bus/delete/{id}','busContoller@destroy')->name('bus.destroy');
Route::get('/bus/show/{id}','busContoller@show')->name('bus.show');
Route::get('/bus/edit/{bus}','busContoller@edit')->name('bus.edit');
Route::put('/bus/update/{bus}','busContoller@update')->name('bus.update');

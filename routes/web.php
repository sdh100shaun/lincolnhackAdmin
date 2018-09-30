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
    return view('home.index');
});
Route::get('/hackers', 'HackerController@index');

Route::get('/sponsors/{type}/{name}', 'SponsorController@index')->name('sponsors')
->where(['name' => '[A-z|0-9]+', 'type'=>'silver|gold']);
Route::get('/partners', 'PartnersController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/setMessage','HackerController@setMessage');
Route::get('/countdown','CountdownController@index');

Route::resource('attendee', 'AttendeeController', ['except' => [
    'destroy'
]]);


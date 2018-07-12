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

// Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('bots', 'BotsController');


Route::resource('questions', 'QuestionsController');

Route::resource('exams', 'ExamsController');

Route::resource('resources', 'ResourcesController');

Route::get('get-updates',   'TelegramController@getUpdates');
Route::get('send-message',  'TelegramController@getSendMessage');
Route::post('send-message', 'TelegramController@postSendMessage');

Route::get('/', function () {
    return view('send-message');
});

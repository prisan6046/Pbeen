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
    return view('auth.login');
});

// Route::get('/' , 'IndexController@Index');

Auth::routes();


## admin ##
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list_doc', 'HomeController@Listdoc')->name('home');



## User ##
Route::get('/adddoc', 'HomeController@Adddoc')->name('home');


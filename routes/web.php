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
    return view('welcome1');
});
Route::get('/', 'MainSiteController@index')->name('welcome');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {

    Route::resource('income', 'IncomeController');
    Route::resource('savingscat', 'SavingsCategory');

});

Route::get('/home', 'HomeController@index')->name('home');

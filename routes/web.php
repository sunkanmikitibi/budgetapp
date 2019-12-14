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



Route::get('member-login', 'Auth\MemberLoginController@showLoginForm');
Route::get('member-register', 'Auth\MemberLoginController@registerForm')->name('member-register');

Route::post('member-login', ['as'=>'member-login','uses'=>'Auth\MemberLoginController@login']);


Route::group(['prefix' => 'admin'], function () {

    Route::resource('income', 'IncomeController');
    Route::resource('savingscat', 'SavingsCategory');
    Route::resource('member', 'ClientsController');

});

Route::get('/home', 'HomeController@index')->name('home');

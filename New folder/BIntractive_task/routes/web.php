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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
*/
Route::get('/',"Login_control@Log_page");
Route::post('/singup',"Login_control@Log_fun");
Route::get('/register',"register_control@Register_page");
Route::post('/home',"register_control@Register_Function");
Route::get('/Logout',"Login_control@Logout_fun");

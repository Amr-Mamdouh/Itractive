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
Route::get('/home', function () {
$var1="Amr";
    return view('Home',compact("var1"));
});

Route::get('/page1','pageController@p1');
Route::get('/first', function () {
    return view('Pages.first');
});

Route::get('/show','Get_from_DBController@show');

Route::get('/login', function () {
    return view('Pages.Login');
});
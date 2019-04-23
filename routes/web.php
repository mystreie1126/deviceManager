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

Route::get('/index', function(){return view('dashboard');})->name('dashboard');

Route::get('/checkingDevice',function(){return view('checkingDevice');})->name('checking');
Route::get('/', ['middleware' =>'guest', function(){
  return view('auth.login');
}]);



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home' , 'homeController@index');
Route::get('hi' , 'homeController@hi');
//admin
Route::get('registeradmin' , 'registeradminController@index');
Route::post('saveregadmin' , 'registeradminController@saveReg');
Route::get('loginadmin' , 'loginadminController@index')->name('loginadmin');//login
Route::post('loginedadmin' , 'loginadminController@login');
Route::get('dashbordadmin' , 'adminHomeController@index')->name("dashbordAdmin");
Route::post('dashbordadmin/showusers' , 'adminHomeController@showUsers')->name('showUsers');
Route::get('dashbordadmin/delete{id}' , 'adminHomeController@deleteuser');////////////////////////
Route::get('dashbordadmin/edit{id}' , 'adminHomeController@edituser');/////////////////////////
Route::get('dashbordadmin/newpost' , 'adminHomeController@newpost')->name('newpost');
//users
Route::get('registeruser' , 'registeruserController@index');
Route::post('savereguser' , 'registeruserController@saveReg');
Route::get('loginuser' , 'loginuserController@index');//login
Route::post('logineduser' , 'loginuserController@login');
Route::get('dashborduser' , 'userHomeController@index');

//cars
Route::get('machines' , 'carsHomeController@index');
Route::get('machines/cars' , 'carsHomeController@indexc');
Route::get('machines/heavycars' , 'carsHomeController@indexh');
Route::get('machines/motorcycle' , 'carsHomeController@indexm');

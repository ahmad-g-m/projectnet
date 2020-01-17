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
Route::match(['GET' , 'POST'],'dashbordadmin' , 'adminHomeController@index')->name('dashbordadmin');
Route::post('dashbordadmin/newpost/uploading' , 'adminHomeController@uploadFile')->name("uploadAdmin");
Route::get('dashbordadmin/showusers' , 'adminHomeController@showUsers')->name('showUsers');
Route::get('dashbordadmin/delete/{id}' , 'adminHomeController@deleteuser')->name('deleteuser');////////////////////////
Route::match(['GET','POST'],'dashbordadmin/edit/{id}' , 'adminHomeController@edituser')->name('edituser');/////////////////////////
Route::match(['GET','POST'],'dashbordadmin/edit/updating' , 'adminHomeController@editCheck')->name('editUpdating');
Route::post('dashbordadmin/newpost' , 'adminHomeController@newpost')->name('newpost');
Route::match(['GET','POST'],'dashbordadmin/editordeletepost' , 'adminHomeController@editOrDeletepost')->name('editdeletepost');
Route::match(['GET','POST'] , 'dashbordadmin/editordeletepost/delete/{id}' , 'adminHomeController@deletePost')->name('deletePost');
Route::match(['GET','POST'] , 'dashbordadmin/editordeletepost/editPost/{id}' , 'adminHomeController@editPost')->name('editPost');
//users
Route::get('registeruser' , 'registeruserController@index');
Route::post('savereguser' , 'registeruserController@saveReg');
Route::get('loginuser' , 'loginuserController@index');//login
Route::post('logineduser' , 'loginuserController@login');
Route::get('dashborduser' , 'userHomeController@index');

//cars
Route::match(['GET','POST'],'machines' , 'carsHomeController@index');
Route::match(['GET','POST'],'machines/sedanscars' , 'carsHomeController@indexSedanCars');//sedan car
Route::match(['GET','POST'],'machines/sedanscars/carpage/{id}' , 'carsHomeController@showPageCars');
Route::match(['GET','POST'],'machines/classicscars' , 'carsHomeController@indexClassicsCars');//classic car
Route::match(['GET','POST'],'machines/classicscar/carpage/{id}' , 'carsHomeController@showPageCars');
Route::match(['GET','POST'],'machines/sportscars' , 'carsHomeController@indexSportsCars');//sport car
Route::match(['GET','POST'],'machines/sportscars/carpage/{id}' , 'carsHomeController@showPageCars');


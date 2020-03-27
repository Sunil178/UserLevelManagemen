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
    return view('index');
})->middleware('auth');

Auth::routes();

Route::resource('/role', 'RoleController')->middleware('super', 'auth');
Route::resource('/permission', 'PermissionController')->middleware('super', 'auth');
Route::get('/role-permission', 'RolePermissionController@index')->middleware('super', 'auth');
Route::post('/role-permission-store', 'RolePermissionController@store')->middleware('super', 'auth');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('company','CompanyController')->middleware('auth');
Route::resource('revenue','RevenueController')->middleware('auth');

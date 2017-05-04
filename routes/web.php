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

Auth::routes();

Route::get('/home','HomeController@index');


Route::get('company/create','CompanyController@create');
Route::post('company/create','CompanyController@store');

Route::get('loans/apply','LoansController@create');


Route::get('company/{id}/stakeholders/create','StakeHolderController@create');
Route::post('company/{id}/stakeholders/create','StakeHolderController@store');
Route::get('company/{id}/stakeholders/show','StakeHolderController@show');

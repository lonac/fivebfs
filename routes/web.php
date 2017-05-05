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
Route::get('company/{id}/show','CompanyController@show');
Route::get('company/{id}/edit','CompanyController@edit');
Route::post('company/{id}/edit','CompanyController@update');



Route::get('company/{id}/loans/apply','LoansController@create');
Route::post('company/{id}/loans/apply','LoansController@store');
Route::get('company/{id}/loans/show','LoansController@index');
Route::get('account/my-loans', 'UserController@myLoans');

Route::get('company/{id}/stakeholders/create','StakeHolderController@create');
Route::post('company/{id}/stakeholders/create','StakeHolderController@store');
Route::get('company/{id}/stakeholders/show','StakeHolderController@show');

Route::get('company/{id}/transactions/create','TransactionController@create');
Route::post('company/{id}/transactions/create','TransactionController@store');
Route::get('company/{id}/transactions/show','TransactionController@show');

Route::get('company/{id}/companyIDs/create','CompanyIDsController@create');
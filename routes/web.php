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

Route::resource('customers','CustomersController');
Route::resource('employees','EmployeesController');
Route::resource('order_details','OrderdetailsController');
Route::resource('payments','PaymentsController');
Route::resource('companies','CompaniesController');
Route::resource('products','ProductsController');
Route::resource('orders','OrdersController');
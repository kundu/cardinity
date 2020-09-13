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

 


Route::get('/', 'HomeController@index');
Route::post('/payment', 'PaymentController@index');
Route::get('/payment', 'PaymentController@index');

Route::post('/payment-result', 'PaymentController@paymentResult');
 

Route::get('/payment-test', 'PaymentController@paymentTest');

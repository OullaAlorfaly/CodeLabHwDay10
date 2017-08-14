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

Route::group(['middleware'=>'guest','prefix'=>'/auth'],function (){
    Route::get('login','UserController@getLogin');
    Route::post('login','UserController@attemptLogin')->name('auth.login');
    Route::get('register','RegisterController@getRegister');
    Route::post('register','RegisterController@register')->name('auth.register');

});


Route::group(['middleware'=>'auth.user'],function (){
    Route::get('/logout','UserController@logout');
    Route::get('/home','CustomerController@getOrder');
    //Customer
    Route::get('/customer','CustomerController@getAllCustomer');
    Route::get('/add_customer/','CustomerController@getAddForm');
    Route::post('/add_customer/{customer}','CustomerController@addCustomer');
    Route::get('/edit_customer/{id}','CustomerController@getCustomerUpdate');
    Route::post('/edit_customer/{customer}','CustomerController@customerUpdate');
    Route::get('/delete/{customer}','CustomerController@CustomerDelete');
    //Product
    Route::get('/product','CustomerController@getAllProduct');
    Route::get('/product/{id}','CustomerController@getOrder');
    Route::get('/add_product/','CustomerController@getAddProductForm');
    Route::post('/add_product/{product}','CustomerController@addProduct');
    Route::get('/edit_product/{id}','CustomerController@getProductUpdate');
    Route::post('/edit_product/{product}','CustomerController@productUpdate');
    Route::get('/product_delete/{product}','CustomerController@productDelete');
    //order
    Route::get('/customerOrders/{customer}','CustomerController@getAllCutomerOrder');


});
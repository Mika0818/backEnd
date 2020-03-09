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

Route::get('/', 'FrontController@index');

Route::get('/news', 'FrontController@news');//List page
Route::get('/news/{id}', 'FrontController@news');//Content Page

Route::get('/products', 'FrontController@products');//List page
Route::get('/products/{id}', 'FrontController@products_detial');//Content Page


Auth::routes();

Route::group(['middleware' => ['auth'],'prefix' => 'home' ], function () {

    //首頁
    Route::get('/', 'HomeController@index');


    //最新消息管理
    Route::get('news', 'NewsController@index');

    Route::get('news/create', 'NewsController@create');
    Route::post('news/store', 'NewsController@store');

    Route::get('news/edit/{id}', 'NewsController@edit');
    Route::post('news/update/{id}', 'NewsController@update');

    Route::post('news/delete/{id}', 'NewsController@delete');

});

//產品管理
    Route::get('products', 'ProductsController@index'); //----------------> 列出所有產品的頁面

    Route::get('products/create', 'ProductsController@create');//---------> 到建立產品的頁面
    Route::post('products/store', 'ProductsController@store');//----------> "儲存"產品資料

    Route::get('products/edit/{id}', 'ProductsController@edit');//--------> 到特定產品的頁面
    Route::post('products/update/{id}', 'ProductsController@update');//---> "更新"產品資料

    Route::post('products/delete/{id}', 'ProductsController@delete'); //---> "刪除"產品資料

//產品類型管理
    Route::get('productType', 'ProductTypeController@index');

    Route::get('productType/create', 'ProductTypeController@create');
    Route::post('productType/store', 'ProductTypeController@store');

    Route::get('productType/edit/{id}', 'ProductTypeController@edit');
    Route::post('productType/update/{id}', 'ProductTypeController@update');

    Route::post('productType/delete/{id}', 'ProductTypeController@delete');

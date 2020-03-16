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

// Route::get('網址', 動作);
// get是動詞（亦即HTTP的傳輸方式），其他動詞才還有post、patch 、delete等，詳情可參考 開始定義系統各項功能 。
//當接收到的網址是用get傳過來的，且在 / 目錄時，會傳回名字叫做welcome的視圖（View），該視圖會去讀取名為 welcome.blade.php 的樣板，簡寫為view('welcome')。

Route::get('/', 'FrontController@index');

Route::get('/news', 'FrontController@news'); //List Page
Route::get('/news/{id}', 'FrontController@news_detail'); //Content Page

Route::get('/contactUs', 'FrontController@contactUs');//聯絡我們

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

    Route::post('ajax_delete_news_imgs', 'NewsController@ajax_delete_news_imgs');

    // 產品管理

    Route::get('products', 'ProductsController@index');

    Route::get('products/create', 'ProductsController@create');
    Route::post('products/store', 'ProductsController@store');

    Route::get('products/edit/{id}', 'ProductsController@edit');
    Route::post('products/update/{id}', 'ProductsController@update');

    Route::post('products/delete/{id}', 'ProductsController@delete');


    // 產品類型管理

    Route::get('productType', 'ProductTypeController@index');

    Route::get('productType/create', 'ProductTypeController@create');
    Route::post('productType/store', 'ProductTypeController@store');

    Route::get('productType/edit/{id}', 'ProductTypeController@edit');
    Route::post('productType/update/{id}', 'ProductTypeController@update');

    Route::post('productType/delete/{id}', 'ProductTypeController@delete');

});




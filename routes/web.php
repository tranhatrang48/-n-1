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

Route::get('/home','PostController@getHome')->name('home');
Route::get('/about', function(){
    return view('post.about');
});
Route::get('/type_product/{type}','PostController@getLoaiSP');
Route::get('/product/{id}','PostController@getChitiet');
Route::get('/contact',function(){
    return view('post.contact');
});
Route::post('/contact','PostController@contact')->name('contact');

Route::get('/checkout',['as'=>'checkout','uses'=>'PostController@getCheckout']);
Route::post('/checkout',['as'=>'checkout','uses'=>'PostController@postCheckout']);


Route::get('/pricing',function(){
    return view('post.pricing');
});
Route::get('/shopping_cart',function(){
    return view('post.shopping_cart');
});

Route::get('/add-to-cart/{id}',['as'=>'themgiohang','uses'=>'PostController@getAddtoCart']);

Route::get('/del-cart/{id}',['as'=>'xoagiohang','uses'=>'PostController@getDelItemCart']);

Route::get('/search',['as'=>'search','uses'=>'PostController@getSearch']);
Route::get('/demo','MyController@slide');

Route::post('/dang-ki',['as'=>'postRegister','uses'=>'PostController@postRegister']);

Route::get('/login','PostController@getLogin')->name('login');
Route::post('/login','PostController@postLogin')->name('login');

Route::get('/logout','PostController@logout')->name('logout');

Route::get('/info','PostController@info')->name('info');

Route::get('/admin','PostController@admin')->name('admin');

Route::get('/dashboard',function(){
    return view('post.dashboard');
});
Route::get('/userprofile',function(){
    return view('post.userprofile');
});
Route::get('/guest','PostController@guest')->name('guest');
Route::get('/product-admin','PostController@productAdmin')->name('product-admin');

Route::get('/notif',function(){
    return view('post.notif');
});

Route::post('/login-admin','PostController@postLoginAdmin')->name('login-admin');
Route::get('/logout-admin','PostController@logoutAdmin')->name('logout-admin');

Route::get('/add_product','PostController@add_product')->name('add_product');
Route::post('/add_sp','PostController@add_sp')->name('add_sp');
Route::get('/update_product/{id}','PostController@updateProduct')->name('update_product');

Route::post('/update_sp/{id}','PostController@update_sp')->name('update_sp');
Route::get('/delete_product/{id}','PostController@delete_sp')->name('delete_sp');
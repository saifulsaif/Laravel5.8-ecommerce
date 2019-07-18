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

Route::get('/','PagesController@index')->name('index');
Route::get('/contact','PagesController@contact')->name('contact');
Route::get('/product','PagesController@product')->name('products');

Route::group(['prefix' => 'admin'],function(){
  Route::get('/','AdminPagesController@index')->name('admin.index');
  Route::get('/product/create','AdminPagesController@product_create')->name('admin.product.create');
  Route::get('/product/edit/{id}','AdminPagesController@product_edit')->name('admin.product.edit');
  Route::get('/product/delete/{id}','AdminPagesController@product_delete')->name('admin.product.delete');
  Route::get('/products','AdminPagesController@product_manage')->name('admin.product.manage');
  Route::post('/product/create','AdminPagesController@product_store')->name('admin.product.store');
  Route::post('/product/update/{id}','AdminPagesController@product_update')->name('admin.product.update');

// Category here
  Route::get('/category','CategoryController@index')->name('category.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
//satuan
Route::get('/home', 'HomeController@index')->name('home');
Route::get('satuan.satuan-index', 'SatuanController@index')->name('satuan-index');
Route::get('satuan.add', 'SatuanController@create')-> name('satuan.add');
Route::post('satuan.save','SatuanController@store')-> name('satuan.save');
Route::get('satuan.edit/{id}','SatuanController@edit')-> name('satuan.edit');
Route::post('satuan.update/{id}','SatuanController@update')-> name('satuan.update');
Route::get('satuan.delete/{id}','SatuanController@destroy')-> name('satuan.delete');
//categori
Route::get('categori.categori-index', 'CategoriController@index')->name('categori-index');
Route::get('categori.add', 'CategoriController@create')-> name('categori.add');
Route::post('categori.save','CategoriController@store')-> name('categori.save');
Route::get('categori.edit/{id}','CategoriController@edit')-> name('categori.edit');
Route::post('categori.update/{id}','CategoriController@update')-> name('categori.update');
Route::get('categori.delete/{id}','CategoriController@destroy')-> name('categori.delete');
//supplier
Route::get('supplier.supplier-index', 'SupplierController@index')->name('supplier-index');
Route::get('supplier.add', 'SupplierController@create')-> name('supplier.add');
Route::post('supplier.save','SupplierController@store')-> name('supplier.save');
Route::get('supplier.edit/{id}','SupplierController@edit')-> name('supplier.edit');
Route::post('supplier.update/{id}','SupplierController@update')-> name('supplier.update');
Route::get('supplier.delete/{id}','SupplierController@destroy')-> name('supplier.delete');

//barang
Route::get('barang.barang', 'BarangController@index')->name('index-barang');
Route::get('barang.add', 'BarangController@create')-> name('barang.add');
Route::post('barang.save','BarangController@store')-> name('barang.save');

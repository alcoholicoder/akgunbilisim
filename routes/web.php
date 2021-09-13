<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/','HomeController@showHome')->name('home');

Route::get('/about','HomeController@showAbout')->name('about');

Route::get('/products','HomeController@showProduct')->name('products');



Route::get('/admin','AdminIndexController@showAdminIndex')->name('adminindex'); // ADMİN ANA SAYFASI //

Route::get('admin/addproduct','AdminIndexController@showAddProduct')->name('adminadd'); // ÜRÜN EKLEME SAYFASI //

Route::get('admin/choosevarriants','AdminIndexController@chooseVarriant')->name('choosevariant'); // ÜRÜNLERE VARİANT BELİRLEME //

Route::post('admin/getproductbycategory','AdminController@AdminGetProductByCategory')->name('getproductsbyid'); // KATEGORİYE GÖRE ÜRÜN GETİRME //
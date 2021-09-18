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

Route::get('admin/addproduct','AdminController@showAddProduct')->name('adminadd'); // ÜRÜN EKLEME SAYFASI //
Route::post('admin/addproduct','ProductController@addProduct');

Route::post('admin/editproduct','ProductController@editProduct');



Route::get('admin/choosevarriants','AdminController@chooseVarriant')->name('choosevariant'); // ÜRÜNLERE VARİANT BELİRLEME //

Route::post('admin/choosevarriants','AdminController@addVarriants'); // ÜRÜNLERE VARİANT EKLEME //



Route::get('admin/createvariant','AdminController@createVariantPage')->name('admin.create.variant'); // YENİ VARİANT OLUŞTURMA SAYFASI//
Route::post('admin/createvariant','AdminController@createVariant'); // YENİ VARİANT OLUŞTURMA //


Route::get('admin/productlist','ProductController@productList')->name('admin.productlist'); // KAYITLI OLAN BÜTÜN ÜRÜNLERİ LİSTELİYOR

Route::post('admin/productlist','ProductController@updateProduct'); // ÜRÜN DEĞİŞİKLİKLERİNİ GÜNCELLİYORUZ




Route::post('admin/getvariantsofcategory','AdminController@getvariantsofcategory'); // KATEGORİ SEÇTİĞİNDE O KATEGORİYE AİT DAHA ÖNCEDEN EKLENMİŞ VARİANTLARI SEÇİLİ OLARAK OTOMATİK GÖSTERİCEZ //












Route::post('admin/getproductbycategory','AdminController@AdminGetProductByCategory')->name('getproductsbyid'); // KATEGORİYE GÖRE ÜRÜN GETİRME //
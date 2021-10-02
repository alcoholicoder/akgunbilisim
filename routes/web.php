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



Route::get('/category/{id?}','CategoriesController@category')->name('category');
Route::get('/admin','AdminIndexController@showAdminIndex')->name('adminindex'); // ADMİN ANA SAYFASI //



// WEBSİTESİ ÖN YÜZ ROUTELERI

Route::get('/','HomeController@showHome')->name('home');
Route::get('/about','HomeController@showAbout')->name('about');
Route::get('/products','HomeController@showProduct')->name('products');
Route::get('/product/{name?}','HomeController@showProductById')->name('productsbyid');
Route::get('/servicez','HomeController@showServices')->name('services');

// ADMİN ÜRÜN VARİANT ROUTES //

Route::get('admin/choosevarriants','AdminController@chooseVarriant')->name('choosevariant'); // ÜRÜNLERE VARİANT BELİRLEME //
Route::post('admin/choosevarriants','AdminController@addVarriants'); // ÜRÜNLERE VARİANT EKLEME //









Route::get('admin/createvariant','AdminController@createVariantPage')->name('admin.create.variant'); // YENİ VARİANT OLUŞTURMA SAYFASI//
Route::post('admin/createvariant','AdminController@createVariant'); // YENİ VARİANT OLUŞTURMA //
Route::get('admin/deletevariant','AdminController@deleteVariant')->name('admin.delete.variant');

Route::get('admin/createbrand','AdminController@createBrandPage')->name('admin.create.brand');
Route::post('admin/createbrand','AdminController@createBrand'); // YENİ MARKA OLUŞTURMA //


// ADMİN PRODUCTS ROUTES //

Route::get('admin/addproduct','AdminController@showAddProduct')->name('adminadd'); // ÜRÜN EKLEME SAYFASI //
Route::post('admin/addproduct','ProductController@addProduct'); // ÜRÜN EKLE BUTONU //
Route::get('admin/productlist','ProductController@productList')->name('admin.productlist'); // KAYITLI OLAN BÜTÜN ÜRÜNLERİ LİSTELİYOR
Route::post('admin/productlist','ProductController@basicUpdate'); // ÜRÜN DEĞİŞİKLİKLERİNİ GÜNCELLİYORUZ
Route::get('admin/deleteproduct','ProductController@deleteProduct')->name('admin.deleteproduct'); // ÜRÜN SİL
Route::get('admin/editproduct','ProductController@editProduct')->name('admin.editproduct'); // ÜRÜN GÜNCELLEME SAYFASI //







Route::post('admin/getvariantsofcategory','AdminController@getvariantsofcategory'); // KATEGORİ SEÇTİĞİNDE O KATEGORİYE AİT DAHA ÖNCEDEN EKLENMİŞ VARİANTLARI SEÇİLİ OLARAK OTOMATİK GÖSTERİCEZ //
Route::post('admin/getproductbycategory','AdminController@AdminGetProductByCategory')->name('getproductsbyid'); // KATEGORİYE GÖRE ÜRÜN GETİRME //

Route::post('/listallproductbybrand','ProductController@listProductById')->name('listgroductbyid');


Route::post('/listproductbybrandalloncurrentcategory','CategoriesController@getProductsByBrand')->name('getproductbybrand');

